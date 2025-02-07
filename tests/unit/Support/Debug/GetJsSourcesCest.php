<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Tests\Unit\Support\Debug;

use Phalcon\Support\Debug;
use UnitTester;

use function sprintf;

/**
 * Class GetJsSourcesCest
 *
 * @package Phalcon\Tests\Unit\Support\Debug
 */
class GetJsSourcesCest
{
    /**
     * Tests Phalcon\Debug :: getJsSources()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2020-09-09
     */
    public function supportDebugGetJsSources(UnitTester $I)
    {
        $I->wantToTest('Debug - getJsSources()');
        $debug = new Debug();
        $uri   = 'https://assets.phalcon.io/debug/6.0.x/';

        $expected = sprintf(
            '<script type="application/javascript" ' .
            'src="%1$sassets/jquery/dist/jquery.min.js"></script>' .
            '<script type="application/javascript" ' .
            'src="%1$sassets/jquery-ui/jquery-ui.min.js"></script>' .
            '<script type="application/javascript" ' .
            'src="%1$sassets/jquery.scrollTo/jquery.scrollTo.min.js"></script>' .
            '<script type="application/javascript" src="%1$sprettify/prettify.js"></script>' .
            '<script type="application/javascript" src="%1$spretty.js"></script>',
            $uri
        );

        $actual = $debug->getJsSources();
        $I->assertEquals($expected, $actual);
    }
}
