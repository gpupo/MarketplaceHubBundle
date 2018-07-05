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

namespace Gpupo\MarkethubBundle\Bridge\Symfony\Bundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $treeBuilder
            ->root('markethub')
            ->children()
            ->booleanNode('enabled')->defaultTrue()->end()
            //mercadolivre-sdk
            ->arrayNode('mercadolivre')->children()
            ->booleanNode('enabled')->defaultFalse()->end()
            ->scalarNode('client_id')->defaultValue('')->end()
            ->scalarNode('access_token')->defaultValue('')->end()
            ->scalarNode('api_version')->defaultValue('sandbox')->end()
            ->booleanNode('verbose')->defaultFalse()->end()
            ->scalarNode('app_url')->defaultValue('http://localhost:8000')->end()
            ->end()->end()
            //mercadolivre-sdk eof

            //mercadopago-sdk
            ->arrayNode('mercadopago')->children()
            ->booleanNode('enabled')->defaultFalse()->end()
            ->scalarNode('client_id')->defaultValue('')->end()
            ->scalarNode('client_secret')->defaultValue('')->end()
            ->scalarNode('user_id')->defaultValue('')->end()
            ->booleanNode('verbose')->defaultFalse()->end()
            ->end()->end()
            //mercadopago-sdk eof

            //common-sdk
            ->arrayNode('common')->children()
            ->booleanNode('enabled')->defaultFalse()->end()
            ->booleanNode('verbose')->defaultFalse()->end()
            ->end()->end()
            //common-sdk eof

            ->end();

        return $treeBuilder;
    }
}
