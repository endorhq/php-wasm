#!/usr/bin/env make

WITH_MYSQLI?=1

ifeq ($(filter ${WITH_MYSQLI},0 1),)
$(error WITH_MYSQLI MUST BE 0 OR 1. PLEASE CHECK YOUR SETTINGS FILE: $(abspath ${ENV_FILE}))
endif

ifeq (${WITH_MYSQLI},1)
WITH_MYSQLI=static
endif

ifeq (${WITH_MYSQLI},static)
CONFIGURE_FLAGS+= --with-mysqli --with-zlib
TEST_LIST+=$(shell ls packages/mysqli/test/*.mjs)
endif
