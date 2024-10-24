<?php
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

namespace Espo\Tools\Stream\Api;

use Espo\Core\Acl;
use Espo\Core\Api\Action;
use Espo\Core\Api\Request;
use Espo\Core\Api\Response;
use Espo\Core\Api\ResponseComposer;
use Espo\Core\Exceptions\BadRequest;
use Espo\Core\Exceptions\Forbidden;
use Espo\Core\Record\SearchParamsFetcher;
use Espo\Core\Select\SearchParams;
use Espo\Core\Select\Where\Item as WhereItem;
use Espo\Tools\Stream\GlobalRecordService;

/**
 * @noinspection PhpUnused
 */
class GetGlobal implements Action
{
    public function __construct(
        private Acl $acl,
        private SearchParamsFetcher $searchParamsFetcher,
        private GlobalRecordService $service
    ) {}

    public function process(Request $request): Response
    {
        if (!$this->acl->checkScope(GlobalRecordService::SCOPE_NAME)) {
            throw new Forbidden();
        }

        $searchParams = $this->fetchSearchParams($request);

        $collection = $this->service->find($searchParams);

        return ResponseComposer::json([
            'list' => $collection->getValueMapList(),
            'total' => $collection->getTotal(),
        ]);
    }

    /**
     * @throws BadRequest
     * @throws Forbidden
     */
    private function fetchSearchParams(Request $request): SearchParams
    {
        $searchParams = $this->searchParamsFetcher->fetch($request);

        $after = $request->getQueryParam('after');

        if ($after) {
            $searchParams = $searchParams
                ->withWhereAdded(
                    WhereItem
                        ::createBuilder()
                        ->setAttribute('createdAt')
                        ->setType(WhereItem\Type::AFTER)
                        ->setValue($after)
                        ->build()
                );
        }

        $beforeNumber = $request->getQueryParam('beforeNumber');

        if ($beforeNumber) {
            $searchParams = $searchParams
                ->withWhereAdded(
                    WhereItem
                        ::createBuilder()
                        ->setAttribute('number')
                        ->setType(WhereItem\Type::LESS_THAN)
                        ->setValue($beforeNumber)
                        ->build()
                );
        }

        return $searchParams;
    }
}
