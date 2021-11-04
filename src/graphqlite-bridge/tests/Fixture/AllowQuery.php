<?php
/*
 * (c) Minh Vuong <vuongxuongminh@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

declare(strict_types=1);

namespace Hasura\GraphQLiteBridge\Tests\Fixture;

use Hasura\GraphQLiteBridge\Attribute\Roles;
use TheCodingMachine\GraphQLite\Annotations\Query;

final class AllowQuery
{
    #[Query(name: 'allow')]
    #[Roles('allow')]
    public function __invoke(): string
    {
        return 'allow';
    }
}