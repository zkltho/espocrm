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

import BaseFieldView from 'views/fields/base';

class EmailFolderStringFieldView extends BaseFieldView {

    // language=Handlebars
    detailTemplateContent = `
        {{#if valueIsSet}}
            {{#if value}}
                {{value}}
            {{else}}
                <span class="none-value">{{translate 'None'}}</span>
            {{/if}}
        {{else}}
            <span class="loading-value"></span>
        {{/if}}
    `

    // noinspection JSCheckFunctionSignatures
    data() {
        if (!this.model.has('folderId')) {
            return {valueIsSet: false};
        }

        return {
            valueIsSet: true,
            value: this.getFolderString(),
        }
    }

    getAttributeList() {
        return [
            'folderId',
            'folderName',
            'groupFolderId',
            'groupFolderName',
            'inArchive',
            'inTrash',
            'isUsersSent',
        ];
    }

    /**
     * @return {string}
     */
    getFolderString() {
        if (this.model.get('inTrash')) {
            return this.translate('trash', 'presetFilters', 'Email');
        }

        if (this.model.get('isUsersSent')) {
            return this.translate('sent', 'presetFilters', 'Email');
        }

        if (this.model.get('inArchive')) {
            return this.translate('archive', 'presetFilters', 'Email');
        }

        if (this.model.get('folderName')) {
            return this.model.get('folderName');
        }

        if (this.model.get('groupFolderName')) {
            return this.model.get('groupFolderName');
        }

        if (this.model.get('isUsers')) {
            return this.translate('inbox', 'presetFilters', 'Email');
        }

        return undefined;
    }
}

export default EmailFolderStringFieldView;
