#!/usr/bin/env make

ifeq (${WITH_LIBPNG}, 1)

LIBPNG_TAG?=v1.6.41
ARCHIVES+= lib/lib/libpng.a
CONFIGURE_FLAGS+= \
	--enable-png

DOCKER_RUN_IN_LIBPNG=${DOCKER_ENV} -w /src/third_party/libpng/ emscripten-builder

third_party/libpng/.gitignore:
	@ echo -e "\e[33;4mDownloading LIBPNG\e[0m"
	${DOCKER_RUN} git clone https://github.com/pnggroup/libpng.git third_party/libpng \
		--branch ${LIBPNG_TAG} \
		--single-branch     \
		--depth 1;

png: third_party/libpng/.gitignore
	@ echo -e "\e[33;4mBuilding LIBPNG\e[0m"
	${DOCKER_RUN_IN_LIBPNG} emcmake cmake . \
		-DCMAKE_INSTALL_PREFIX=/src/lib/ \
		-DCMAKE_BUILD_TYPE=Release \
		-DCMAKE_C_FLAGS="-I/emsdk/upstream/emscripten/system/lib/libc/musl/include/ -fPIC"
	${DOCKER_RUN_IN_LIBPNG} emmake make -j1;
	${DOCKER_RUN_IN_LIBPNG} emmake make install;

endif

