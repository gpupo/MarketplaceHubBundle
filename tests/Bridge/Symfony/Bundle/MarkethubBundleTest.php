<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/MarketBundle
 * Created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <https://opensource.gpupo.com/>.
 *
 */

namespace Gpupo\MarkethubBundle\Tests\Bridge\Symfony\Bundle;

use Gpupo\MarkethubBundle\Bridge\Symfony\Bundle\MarkethubBundle;
use Gpupo\MarkethubBundle\Tests\TestCaseAbstract;
use Gpupo\MarkethubBundle\Tests\Traits\SetupContainerTrait;

/**
 * @coversNothing
 */
class MarkethubBundleTest extends TestCaseAbstract
{
    use SetupContainerTrait;

    public function testBuild()
    {
        $bundle = new MarkethubBundle();
        $bundle->setContainer($this->container);
        $bundle->boot();

        $this->assertSame('MarkethubBundle', $bundle->getName());
    }
}
