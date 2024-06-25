#!/usr/bin/env make

ifdef PHP_BUILDER_DIR
PHP_CGI_DIST_DIR:=${PHP_BUILDER_DIR}/${PHP_CGI_DIST_DIR}
PHP_CGI_ASSET_DIR:=${PHP_BUILDER_DIR}/${PHP_CGI_ASSET_DIR}
endif
PHP_CGI_DIST_DIR?=${ENV_DIR}/packages/php-cgi-wasm
PHP_CGI_ASSET_DIR?=${PHP_CGI_DIST_DIR}

ifneq (${SHARED_ASSET_PATHS},${PHP_CGI_ASSET_DIR})
SHARED_ASSET_PATHS+= ${PHP_CGI_ASSET_DIR}
endif
