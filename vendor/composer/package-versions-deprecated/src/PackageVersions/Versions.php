<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'ahsankhatri/firestore-php' => 'master@master',
  'aloha/twilio' => '5.0.0@f430c272c4e21a53cab6aadade696ba8083e3207',
  'anlutro/l4-settings' => 'v1.0.0@179b2719b13d37f054895193cfd82bd0f32adbca',
  'anthonymartin/geo-location' => 'v2.0.1@e92d153c8ab97116ab1342826b74c64c3302b81d',
  'asantibanez/livewire-charts' => 'v2.3.0@582ad340ddf0d138df67319073886f9314cccd0a',
  'asantibanez/livewire-select' => 'v2.0.0@e15bd41a0f913509b096ad99cbd6b1c462e0bf76',
  'asm89/stack-cors' => 'v2.0.3@9cb795bf30988e8c96dd3c40623c48a877bc6714',
  'blade-ui-kit/blade-heroicons' => '0.3.1@b80c667dfe6eb5c69730e11810ca2d5d1654314a',
  'blade-ui-kit/blade-icons' => '0.5.1@d6bb74cdf0420900d14c6bc2304e28d0463dd0a9',
  'brick/math' => '0.9.2@dff976c2f3487d42c1db75a3b180e2b9f0e72ce0',
  'brunocfalcao/blade-feather-icons' => 'v1.1.3@8c38fe35f1a71e14fb5d11af255a05a1fcc663a1',
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'doctrine/cache' => '1.11.3@3bb5588cec00a0268829cc4a518490df6741af9d',
  'doctrine/dbal' => '3.1.0@5ba62e7e40df119424866064faf2cef66cb5232a',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dragonmantank/cron-expression' => 'v3.1.0@7a8c6e56ab3ffcc538d05e8155bb42269abf1a0c',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'ezyang/htmlpurifier' => 'v4.13.0@08e27c97e4c6ed02f37c5b2b20488046c8d90d75',
  'fideloper/proxy' => '4.4.1@c073b2bd04d1c90e04dc1b787662b558dd65ade0',
  'fig/http-message-util' => '1.1.5@9d94dc0154230ac39e5bf89398b324a86f63f765',
  'firebase/php-jwt' => 'v5.3.0@3c2d70f2e64e2922345e89f2ceae47d2463faae1',
  'fruitcake/laravel-cors' => 'v2.0.4@a8ccedc7ca95189ead0e407c43b530dc17791d6a',
  'fzaninotto/faker' => 'dev-master@5ffe7db6c80f441f150fc88008d64e64af66634b',
  'geo-sot/laravel-env-editor' => 'v0.9.12@fc6f83787d86119bcdab016b2fdb8ebc57ebb1a5',
  'giggsey/libphonenumber-for-php' => '8.12.25@7d397cbd2e01e78cf79ff347e40a403dbc4c22fa',
  'giggsey/locale' => '1.9@b07f1eace8072ccc61445ad8fbd493ff9d783043',
  'google/auth' => 'v1.15.1@4e0c9367719df9703e96f5ad613041b87742471c',
  'google/cloud-core' => 'v1.42.1@26a471ec72ee98ae146316054b25a88de8693b11',
  'google/cloud-storage' => 'v1.23.2@4a9f1262c2929af8c33a58466616820dba91dddc',
  'google/cloud-translate' => 'v1.10.1@ea5f24247e77ec590b1c1833589df2fa48415c6d',
  'google/common-protos' => '1.3@535f489ff1c3433c0ea64cd5aa0560f926949ac5',
  'google/crc32' => 'v0.1.0@a8525f0dea6fca1893e1bae2f6e804c5f7d007fb',
  'google/gax' => 'v1.7.1@48cd41dbea7b8fece8c41100022786d149de64ca',
  'google/grpc-gcp' => '0.1.5@bb9bdbf62f6ae4e73d5209d85b1d0a0b9855ff36',
  'google/protobuf' => 'v3.17.3@ae9282cf11dd2933b7e71a611f9590f07d53d3f3',
  'graham-campbell/result-type' => 'v1.0.1@7e279d2cd5d7fbb156ce46daada972355cea27bb',
  'grpc/grpc' => '1.38.0@e1687963fb0b087d0c70e75d3bfff9062eaeb215',
  'guzzlehttp/guzzle' => '7.3.0@7008573787b430c1c1f650e3722d9bba59967628',
  'guzzlehttp/promises' => '1.4.1@8e7d04f1f6450fef59366c399cfad4b9383aa30d',
  'guzzlehttp/psr7' => '1.8.2@dc960a912984efb74d0a90222870c72c87f10c91',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'intervention/image' => '2.5.1@abbf18d5ab8367f96b3205ca3c89fb2fa598c69e',
  'jantinnerezo/livewire-alert' => '2.1.6@e5e05f63c42b1410433a1c70d2a9a9d48939f949',
  'jzonta/faker-restaurant' => '1.1.11@455009b40e7f57c92ee8f194480c4840e92e9e09',
  'kdion4891/laravel-livewire-tables' => '1.6.1@47baad20d7b9dc533ce79783c0bea2de15c71bd6',
  'kirschbaum-development/eloquent-power-joins' => '2.4.0@4837a42be7c335141bbeb1f9aec5d96a6986ea13',
  'kreait/clock' => '1.1.0@8f1fbc252e4e81298ae7c520597c25e9a6a0f454',
  'kreait/firebase-php' => '5.20.1@5c5c8f3e5d2ae07ed4e5e521392609b4f812b67c',
  'kreait/firebase-tokens' => '1.15.0@b39d7c3a78d0912c9a617cd42d4bd356209b1b91',
  'laravel-validation-rules/colour' => '1.5.0@4c5f337ac03d9c6ebfc9fe771aa19bdb7ae47b32',
  'laravel/framework' => 'v8.47.0@93db226946453f4285558b7c3166ddb6e7ea5400',
  'laravel/sanctum' => 'v2.11.2@b21e65cbe13896946986cb0868180cd69e1bd5d3',
  'laravel/tinker' => 'v2.6.1@04ad32c1a3328081097a181875733fa51f402083',
  'lcobucci/clock' => '2.0.0@353d83fe2e6ae95745b16b3d911813df6a05bfb3',
  'lcobucci/jwt' => '4.1.4@71cf170102c8371ccd933fa4df6252086d144de6',
  'league/commonmark' => '1.6.2@7d70d2f19c84bcc16275ea47edabee24747352eb',
  'league/flysystem' => '1.1.3@9be3b16c877d477357c015cec057548cf9b2a14a',
  'league/glide' => '1.7.0@ae5e26700573cb678919d28e425a8b87bc71c546',
  'league/iso3166' => '3.0.0@9976d382f270ad3f3df8a68719beb7a7179ffa1e',
  'league/mime-type-detection' => '1.7.0@3b9dff8aaf7323590c1d2e443db701eb1f9aa0d3',
  'livewire/livewire' => 'v2.5.5@de192292d68276d831e5fd9824c80c3b78a21ddf',
  'maatwebsite/excel' => '3.1.31@cbe6370af70f93bd017f77ef92d32bd492a47fcb',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'malhal/laravel-geographical' => '1.0.4@caf23e3d08c6b5baeabc5191796ac502ebf88ae4',
  'markbaker/complex' => '2.0.3@6f724d7e04606fd8adaa4e3bb381c3e9db09c946',
  'markbaker/matrix' => '2.1.3@174395a901b5ba0925f1d790fa91bab531074b61',
  'mockery/mockery' => '1.4.3@d1339f64479af1bee0e82a0413813fe5345a54ea',
  'monolog/monolog' => '2.2.0@1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
  'mtdowling/jmespath.php' => '2.6.0@42dae2cbd13154083ca6d70099692fef8ca84bfb',
  'myclabs/php-enum' => '1.8.0@46cf3d8498b095bd33727b13fd5707263af99421',
  'nesbot/carbon' => '2.49.0@93d9db91c0235c486875d22f1e08b50bdf3e6eee',
  'nicmart/numbers' => 'v0.1.0@409638f0a7d3ea556990026c37c0ea05b27a8ded',
  'nikic/php-parser' => 'v4.10.5@4432ba399e47c66624bc73c8c0f811e5c109576f',
  'opis/closure' => '3.6.2@06e2ebd25f2869e54a306dda991f7db58066f7f6',
  'orangehill/iseed' => 'v3.0.1@874f77a20d49aa4c6c5fec2daf0daa070514e013',
  'ozdemirburak/iris' => '2.3.1@7bbb5868afbb9f95dfb9110650cbe994027792d2',
  'phpoffice/phpspreadsheet' => '1.18.0@418cd304e8e6b417ea79c3b29126a25dc4b1170c',
  'phpoption/phpoption' => '1.7.5@994ecccd8f3283ecf5ac33254543eb0ac946d525',
  'propaganistas/laravel-phone' => '4.3.0@6953b54542f530c75ab8eb953b38cca4bfdc5d88',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.10.8@e4573f47750dd6c92dca5aee543fa77513cbd8d3',
  'rachidlaasri/laravel-installer' => '4.1.0@b751b4c23dba893e9a4a12f881a6fd8fa921d228',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.1.3@28a5c4ab2f5111db6a60b2b4ec84057e0f43b9c1',
  'ramsey/uuid' => '4.1.1@cd4032040a750077205918c86049aa0f43d22947',
  'rap2hpoutre/laravel-log-viewer' => 'v1.7.0@27392d29234b6ff38a456454558f4bcc40cc837a',
  'rappasoft/laravel-livewire-tables' => 'v1.11.0@e273ef7416edfdb2622f9ac8bfd7420bb9ee0987',
  'razorpay/razorpay' => '2.7.0@e28454acdc110b544fc80bec9518b9b86b275a2c',
  'riverline/multipart-parser' => '2.0.8@2fe9026789754c1ff07c06047f0acc113e90933a',
  'rize/uri-template' => '0.3.3@6e0b97e00e0f36c652dd3c37b194ef07de669b82',
  'rmccue/requests' => 'v1.8.0@afbe4790e4def03581c4a0963a1e8aa01f6030f1',
  'spatie/db-dumper' => '2.21.1@05e5955fb882008a8947c5a45146d86cfafa10d1',
  'spatie/image' => '1.10.5@63a963d0200fb26f2564bf7201fc7272d9b22933',
  'spatie/image-optimizer' => '1.4.0@c22202fdd57856ed18a79cfab522653291a6e96a',
  'spatie/laravel-backup' => '6.16.0@6b2229a07d92c2bb146ad9c5223fc32e9d74830c',
  'spatie/laravel-medialibrary' => '8.10.2@448e8389cadc79f42c3c96c7c9491b57015702d4',
  'spatie/laravel-model-status' => '1.10.2@6f9ec8fa41abdce3ec35cc5a2debd564d096d30c',
  'spatie/laravel-package-tools' => '1.9.0@cf4c4cec220575e2864c6082842d76822421f1b1',
  'spatie/laravel-permission' => '3.18.0@1c51a5fa12131565fe3860705163e53d7a26258a',
  'spatie/temporary-directory' => '1.3.0@f517729b3793bca58f847c5fd383ec16f03ffec6',
  'srmklive/paypal' => '3.0.3@0aefc864b351770f9e82b2fc88d8aa6c87de3c87',
  'stripe/stripe-php' => 'v7.83.0@bb7244c7334ad8bf30d31bb4972d5aff57df1563',
  'swiftmailer/swiftmailer' => 'v6.2.7@15f7faf8508e04471f666633addacf54c0ab5933',
  'symfony/console' => 'v5.3.0@058553870f7809087fa80fa734704a21b9bcaeb2',
  'symfony/css-selector' => 'v5.3.0@fcd0b29a7a0b1bb5bfbedc6231583d77fea04814',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/error-handler' => 'v5.3.0@0e6768b8c0dcef26df087df2bbbaa143867a59b2',
  'symfony/event-dispatcher' => 'v5.3.0@67a5f354afa8e2f231081b3fa11a5912f933c3ce',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/finder' => 'v5.3.0@0ae3f047bed4edff6fd35b26a9a6bfdc92c953c6',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v5.3.1@8827b90cf8806e467124ad476acd15216c2fceb6',
  'symfony/http-kernel' => 'v5.3.1@74eb022e3bac36b3d3a897951a98759f2b32b864',
  'symfony/mime' => 'v5.3.0@ed710d297b181f6a7194d8172c9c2423d58e4852',
  'symfony/polyfill-ctype' => 'v1.23.0@46cd95797e9df938fdd2b03693b5fca5e64b01ce',
  'symfony/polyfill-iconv' => 'v1.23.0@63b5bb7db83e5673936d6e3b8b3e022ff6474933',
  'symfony/polyfill-intl-grapheme' => 'v1.23.0@24b72c6baa32c746a4d0840147c9715e42bb68ab',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.0@2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
  'symfony/polyfill-php72' => 'v1.23.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.0@eca0bf41ed421bed1b57c4958bab16aa86b757d0',
  'symfony/process' => 'v5.3.0@53e36cb1c160505cdaf1ef201501669c4c317191',
  'symfony/routing' => 'v5.3.0@368e81376a8e049c37cb80ae87dbfbf411279199',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/string' => 'v5.3.0@a9a0f8b6aafc5d2d1c116dcccd1573a95153515b',
  'symfony/translation' => 'v5.3.0@251de0d921c42ef0a81494d8f37405421deefdf6',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/var-dumper' => 'v5.3.0@1d3953e627fe4b5f6df503f356b6545ada6351f3',
  'tijsverkoyen/css-to-inline-styles' => '2.2.3@b43b05cf43c1b6d849478965062b6ef73e223bb5',
  'twilio/sdk' => '6.28.0@bf3fc7e3a4619923bbc7d57817a52b8f016da951',
  'vlucas/phpdotenv' => 'v5.3.0@b3eac5c7ac896e52deab4a99068e3f4ab12d9e56',
  'voku/portable-ascii' => '1.5.6@80953678b19901e5165c56752d087fc11526017c',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'willvincent/laravel-rateable' => '2.3.0@f6b3440dbf4b791b235ea4e4bd3fa7f87fed236e',
  'dipeshsukhia/laravel-country-state-city-data' => 'v1.1.2@b4dca13190b29c108fd89c74cdeaccf9b7cbff05',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'facade/flare-client-php' => '1.8.1@47b639dc02bcfdfc4ebb83de703856fa01e35f5f',
  'facade/ignition' => '2.10.2@43688227bbf27c43bc1ad83af224f135b6ef0ff4',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'filp/whoops' => '2.13.0@2edbc73a4687d9085c8f20f398eebade844e8424',
  'laracasts/generators' => '2.0.0@0b8b3d300cc948217f7547502b6de5db6fbafa70',
  'laravel/sail' => 'v0.0.5@d9b0575ece889a35b9741789452c1c7abca5bc2f',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nunomaduro/collision' => 'v5.4.0@41b7e9999133d5082700d31a1d0977161df8322a',
  'phar-io/manifest' => '2.0.1@85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpspec/prophecy' => '1.13.0@be1996ed8adc35c3fd795488a653f4b518be70ea',
  'phpunit/php-code-coverage' => '9.2.6@f6293e1b30a2354e8428e004689671b83871edde',
  'phpunit/php-file-iterator' => '3.0.5@aa4be8575f26070b100fccb67faabb28f21f66f8',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.5@89ff45ea9d70e35522fb6654a2ebc221158de276',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.3@d89cc98761b8cb5a1a235a6b703ae50d34080e65',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'theanik/laravel-more-command' => '1.1.0@b946bb8e166b12374020c24c1598f4269dc1812a',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'laravel/laravel' => 'dev-develop@79635342ada4237c6ee9507adf56e1c19455dd68',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}