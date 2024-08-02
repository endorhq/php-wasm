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
    const ROOT_PACKAGE_NAME = 'laminas/laminas-mvc-skeleton';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'brick/varexporter' => '0.4.0@2fd038f7c9d12d468130c6e1b3ce06e4160a7dbb',
  'laminas/laminas-component-installer' => '3.4.0@e4c15d50c5dcbe0207285659f083df70bb256bb6',
  'laminas/laminas-config' => '3.9.0@e53717277f6c22b1c697a46473b9a5ec9a438efa',
  'laminas/laminas-development-mode' => '3.12.0@cd2f9885deab41ef590924d53ad4041db490b923',
  'laminas/laminas-escaper' => '2.13.0@af459883f4018d0f8a0c69c7a209daef3bf973ba',
  'laminas/laminas-eventmanager' => '3.13.0@ce5ba8bde378fca5cb0cd514f01823637215b2f3',
  'laminas/laminas-http' => '2.19.0@26dd6d1177e25d970058863c2afed12bb9dbff4d',
  'laminas/laminas-json' => '3.6.0@53ff787b20b77197f38680c737e8dfffa846b85b',
  'laminas/laminas-loader' => '2.10.0@e6fe952304ef40ce45cd814751ab35d42afdad12',
  'laminas/laminas-modulemanager' => '2.15.0@4c4e6f29f0b1a770c8ce4f30dd3a48eb45ed7d3b',
  'laminas/laminas-mvc' => '3.7.0@3f65447addf487189000e54dc1525cd952951da4',
  'laminas/laminas-router' => '3.13.0@04e14e757303787c83f79298dbd4483eebacfeb9',
  'laminas/laminas-servicemanager' => '3.22.1@de98d297d4743956a0558a6d71616979ff779328',
  'laminas/laminas-skeleton-installer' => '1.3.0@ec2fc36cfac35919c69748a4c1ce05c4f06daedf',
  'laminas/laminas-stdlib' => '3.19.0@6a192dd0882b514e45506f533b833b623b78fff3',
  'laminas/laminas-uri' => '2.11.0@e662c685125061d3115906e5eb30f966842cc226',
  'laminas/laminas-validator' => '2.53.0@dbcfc19cb7f2e3eb3a27ba5d059c200e8404d72c',
  'laminas/laminas-view' => '2.34.0@53136a59622c8809c519b29dbbaa346aa39e834a',
  'nikic/php-parser' => 'v4.19.1@4e1b88d21c69391150ace211e9eaf05810858d0b',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/http-message' => '2.0@402d35bcb92c70c026d1a6a9883f06b2ead23d71',
  'webimpress/safe-writer' => '2.2.0@9d37cc8bee20f7cb2f58f6e23e05097eab5072e6',
  'amphp/amp' => 'v2.6.4@ded3d9be08f526089eb7ee8d9f16a9768f9dec2d',
  'amphp/byte-stream' => 'v1.8.2@4f0e968ba3798a423730f567b1b50d3441c16ddc',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'composer/pcre' => '3.1.3@5b16e25a5355f1f3afdfc2f954a0a80aec4826a8',
  'composer/semver' => '3.4.0@35e8d0af4486141bc745f23a29cc2091eb624a32',
  'composer/xdebug-handler' => '3.0.4@4f988f8fdf580d53bdb2d1278fe93d1ed5462255',
  'dealerdirect/phpcodesniffer-composer-installer' => 'v1.0.0@4be43904336affa5c2f70744a348312336afd0da',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/deprecations' => '1.1.3@dfbaa3c2d2e9a9df1118213f3b8b0c597bb99fab',
  'felixfbecker/advanced-json-rpc' => 'v3.2.1@b5f37dbff9a8ad360ca341f3240dc1c168b45447',
  'felixfbecker/language-server-protocol' => 'v1.5.2@6e82196ffd7c62f7794d778ca52b69feec9f2842',
  'fidry/cpu-core-counter' => '1.1.0@f92996c4d5c1a696a6a970e20f7c4216200fcc42',
  'laminas/laminas-test' => '4.10.0@607c55ccb98bf3ade42820a1cf14e9af1f4d1cc8',
  'masterminds/html5' => '2.9.0@f5ac2c0b0a2eefca70b2ce32a5809992227e75a6',
  'myclabs/deep-copy' => '1.11.1@7284c22080590fb39f2ffa3e9057f10a4ddd0e0c',
  'netresearch/jsonmapper' => 'v4.4.1@132c75c7dd83e45353ebb9c6c9f591952995bbf0',
  'phar-io/manifest' => '2.0.4@54750ef60c58e43759730615a392c31c80e23176',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.4.0@298d2febfe79d03fe714eb871d5538da55205b1a',
  'phpdocumentor/type-resolver' => '1.8.2@153ae662783729388a584b4361f2545e4d841e3c',
  'phpstan/phpdoc-parser' => '1.28.0@cd06d6b1a1b3c75b0b83f97577869fd85a3cd4fb',
  'phpunit/php-code-coverage' => '10.1.14@e3f51450ebffe8e0efdf7346ae966a656f7d5e5b',
  'phpunit/php-file-iterator' => '4.1.0@a95037b6d9e608ba092da1b23931e537cadc3c3c',
  'phpunit/php-invoker' => '4.0.0@f5e568ba02fa5ba0ddd0f618391d5a9ea50b06d7',
  'phpunit/php-text-template' => '3.0.1@0c7b06ff49e3d5072f057eb1fa59258bf287a748',
  'phpunit/php-timer' => '6.0.0@e2a2d67966e740530f4a3343fe2e030ffdc1161d',
  'phpunit/phpunit' => '10.5.20@547d314dc24ec1e177720d45c6263fb226cc2ae3',
  'psalm/plugin-phpunit' => '0.18.4@e4ab3096653d9eb6f6d0ea5f4461898d59ae4dbc',
  'psr/log' => '3.0.0@fe5ea303b0887d5caefd3d431c3e61ad47037001',
  'sebastian/cli-parser' => '2.0.1@c34583b87e7b7a8055bf6c450c2c77ce32a24084',
  'sebastian/code-unit' => '2.0.0@a81fee9eef0b7a76af11d121767abc44c104e503',
  'sebastian/code-unit-reverse-lookup' => '3.0.0@5e3a687f7d8ae33fb362c5c0743794bbb2420a1d',
  'sebastian/comparator' => '5.0.1@2db5010a484d53ebf536087a70b4a5423c102372',
  'sebastian/complexity' => '3.2.0@68ff824baeae169ec9f2137158ee529584553799',
  'sebastian/diff' => '5.1.1@c41e007b4b62af48218231d6c2275e4c9b975b2e',
  'sebastian/environment' => '6.1.0@8074dbcd93529b357029f5cc5058fd3e43666984',
  'sebastian/exporter' => '5.1.2@955288482d97c19a372d3f31006ab3f37da47adf',
  'sebastian/global-state' => '6.0.2@987bafff24ecc4c9ac418cab1145b96dd6e9cbd9',
  'sebastian/lines-of-code' => '2.0.2@856e7f6a75a84e339195d48c556f23be2ebf75d0',
  'sebastian/object-enumerator' => '5.0.0@202d0e344a580d7f7d04b3fafce6933e59dae906',
  'sebastian/object-reflector' => '3.0.0@24ed13d98130f0e7122df55d06c5c4942a577957',
  'sebastian/recursion-context' => '5.0.0@05909fb5bc7df4c52992396d0116aed689f93712',
  'sebastian/type' => '4.0.0@462699a16464c3944eefc02ebdd77882bd3925bf',
  'sebastian/version' => '4.0.1@c51fa83a5d8f43f1402e3f32a005e6262244ef17',
  'spatie/array-to-xml' => '3.2.3@c95fd4db94ec199f798d4b5b4a81757bd20d88ab',
  'squizlabs/php_codesniffer' => '3.9.2@aac1f6f347a5c5ac6bc98ad395007df00990f480',
  'symfony/console' => 'v7.0.6@fde915cd8e7eb99b3d531d3d5c09531429c3f9e5',
  'symfony/css-selector' => 'v7.0.3@ec60a4edf94e63b0556b6a0888548bb400a3a3be',
  'symfony/dom-crawler' => 'v7.0.4@6cb272cbec4dc7a30a853d2931766b03bea92dda',
  'symfony/filesystem' => 'v7.0.6@408105dff4c104454100730bdfd1a9cdd993f04d',
  'symfony/polyfill-ctype' => 'v1.29.0@ef4d7e442ca910c4764bce785146269b30cb5fc4',
  'symfony/polyfill-intl-grapheme' => 'v1.29.0@32a9da87d7b3245e09ac426c83d334ae9f06f80f',
  'symfony/polyfill-intl-normalizer' => 'v1.29.0@bc45c394692b948b4d383a08d7753968bed9a83d',
  'symfony/polyfill-mbstring' => 'v1.29.0@9773676c8a1bb1f8d4340a62efe641cf76eda7ec',
  'symfony/service-contracts' => 'v3.4.2@11bbf19a0fb7b36345861e85c5768844c552906e',
  'symfony/string' => 'v7.0.4@f5832521b998b0bec40bee688ad5de98d4cf111b',
  'theseer/tokenizer' => '1.2.3@737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2',
  'vimeo/psalm' => '5.23.1@8471a896ccea3526b26d082f4461eeea467f10a4',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'laminas/laminas-mvc-skeleton' => '2.4.x-dev@',
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
        if (!self::composer2ApiUsable()) {
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
        if (self::composer2ApiUsable()) {
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

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}