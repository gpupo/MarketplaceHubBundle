<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/markethub-bundle
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

namespace Gpupo\MarkethubBundle\Tests\Factory;

use Gpupo\MarkethubBundle\Factory\MercadopagoFactory;
use Gpupo\MercadopagoSdk\Entity\PaymentTranslator;

/**
 * @coversNothing
 */
class MercadopagoFactoryTest extends FactoryTestAbstract
{
    protected $factoryClass = MercadopagoFactory::class;
    protected $factoryId = 'test.'.MercadopagoFactory::class;

    public function testIsAFactory()
    {
        $factory = new MercadopagoFactory();

        $this->assertSame('markethub.mercadopago.factory', $factory::id);

    }

    public function dataProviderServices()
    {
        return [
            [MercadopagoFactory::class, $this->factoryId],
        ];
    }

    public function dataProviderObjetos()
    {
        return [
            [PaymentTranslator::class, 'paymentTranslator', []],
        ];
    }
}
