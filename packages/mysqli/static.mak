#!/usr/bin/env make

WITH_MYSQLI?=dynamic

ifeq ($(filter ${WITH_MYSQLI},0 1 shared static dynamic),)
$(error WITH_MYSQLI MUST BE 0, 1, static, shared, OR dynamic. PLEASE CHECK YOUR SETTINGS FILE: $(abspath ${ENV_FILE}))
endif

ifeq (${WITH_MYSQLI},1)
WITH_MYSQLI=static
endif

ifeq (${WITH_MYSQLI},static)
CONFIGURE_FLAGS+=  --enable-pdo --with-mysqli --with-mysqlnd --with-pdo-mysqli
ARCHIVES+= lib/lib/libmysqli.a
TEST_LIST+=$(shell ls packages/mysqli/test/*.mjs)
SKIP_LIBS+= -lmysqli
endif

ifeq (${WITH_MYSQLI},shared)
CONFIGURE_FLAGS+=  --enable-pdo --with-mysqli --with-mysqlnd --with-pdo-mysqli
PHP_CONFIGURE_DEPS+= packages/mysqli/libmysqli.so
TEST_LIST+=$(shell ls packages/mysqli/test/*.mjs)
SHARED_LIBS+= packages/mysqli/libmysqli.so
PHP_ASSET_LIST+= libmysqli.so
SKIP_LIBS+= -lmysqli
endif

ifeq (${WITH_MYSQLI},dynamic)
CONFIGURE_FLAGS+=  --enable-pdo
PHP_ASSET_LIST+= libmysqli.so php${PHP_VERSION}-mysqli.so php${PHP_VERSION}-pdo-mysqli.so
TEST_LIST+=$(shell ls packages/mysqli/test/*.mjs)
SKIP_LIBS+= -lmysqli
endif