/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM – Open Source CRM application.
 * Copyright (C) 2014-2024 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.espocrm.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

import View from 'view';

/**
 * @module views/record/row-actions/actions
 */

/**
 * @typedef {{
 *     label?: string,
 *     labelTranslation?: string,
 *     acl?: string,
 *     groupIndex?: number,
 *     name?: string,
 *     text?: string,
 * }} module:views/record/row-actions/actions~item
 */

/**
 * Row actions.
 */
class DefaultRowActionsView extends View {

    template = 'record/row-actions/default'

    setup() {
        this.options.acl = this.options.acl || {};
        this.scope = this.options.scope || this.model.entityType;

        /** @type {Object.<string, {isAvailable: function(module:model, string)}>} */
        this.handlers = this.options.rowActionHandlers || {};

        /** @type {module:views/record/row-actions/actions~item[]} */
        this.additionalActionDataList = [];

        this.setupAdditionalActions();

        this.listenTo(this.model, 'change', () => this.reRender());
    }

    afterRender() {
        const $dd = this.$el.find('button[data-toggle="dropdown"]').parent();

        let isChecked = false;

        $dd.on('show.bs.dropdown', () => {
            const $el = this.$el.closest('.list-row');

            isChecked = false;

            if ($el.hasClass('active')) {
                isChecked = true;
            }

            $el.addClass('active');
        });

        $dd.on('hide.bs.dropdown', () => {
            if (!isChecked) {
                this.$el.closest('.list-row').removeClass('active');
            }
        });
    }

    /**
     * Get an action list.
     *
     * @return {module:views/record/list~rowAction[]}
     */
    getActionList() {
        /** @type {module:views/record/list~rowAction[]} */
        const list = [{
            action: 'quickView',
            label: 'View',
            data: {
                id: this.model.id
            },
            link: '#' + this.model.entityType + '/view/' + this.model.id,
            groupIndex: 0,
        }];

        if (this.options.acl.edit) {
            list.push({
                action: 'quickEdit',
                label: 'Edit',
                data: {
                    id: this.model.id
                },
                link: '#' + this.model.entityType + '/edit/' + this.model.id,
                groupIndex: 0,
            });
        }

        this.getAdditionalActionList().forEach(item => list.push(item));

        if (this.options.acl.delete) {
            list.push({
                action: 'quickRemove',
                label: 'Remove',
                data: {
                    id: this.model.id,
                },
                groupIndex: 0,
            });
        }

        return list;
    }

    getAdditionalActionList() {
        const list = [];

        this.additionalActionDataList.forEach(item => {
            const handler = this.handlers[item.name];

            if (handler && !handler.isAvailable(this.model, item.name)) {
                return;
            }

            if (item.acl && item.acl !== 'read' && !this.options.acl[item.acl]) {
                return;
            }

            list.push({
                action: 'rowAction',
                text: item.text,
                data: {
                    id: this.model.id,
                    actualAction: item.name,
                },
                groupIndex: item.groupIndex,
            });
        });

        return list;
    }

    data() {
        /** @type {Array<module:views/record/row-actions/actions~item[]>} */
        const dropdownGroups = [];

        this.getActionList().forEach(item => {
            // For bc.
            if (item === false) {
                return;
            }

            const index = (item.groupIndex === undefined ? 9999 : item.groupIndex) + 100;

            if (dropdownGroups[index] === undefined) {
                dropdownGroups[index] = [];
            }

            dropdownGroups[index].push(item);
        });

        const dropdownItemList = [];

        dropdownGroups.forEach(list => {
            list.forEach(it => dropdownItemList.push(it));

            dropdownItemList.push(false);
        });

        return {
            acl: this.options.acl,
            actionList: dropdownItemList,
            scope: this.model.entityType,
        };
    }

    setupAdditionalActions() {
        /** @type {string[]} */
        const list = this.options.additionalActionList;

        if (!list) {
            return;
        }

        const defs = this.getMetadata().get(`clientDefs.${this.scope}.rowActionDefs`) || {};

        list.forEach(action => {
            /** @type {{label?: string, labelTranslation?: string, acl?: string, groupIndex?: number}} */
            const itemDefs = defs[action] || {};

            const text = itemDefs.labelTranslation ?
                this.getLanguage().translatePath(itemDefs.labelTranslation) :
                this.getLanguage().translate(itemDefs.label, 'labels', this.model.entityType);

            this.additionalActionDataList.push({
                name: action,
                acl:  itemDefs.acl,
                text: text,
                groupIndex: itemDefs.groupIndex,
            });
        });
    }
}

export default DefaultRowActionsView;
