# Bisecting for CloudFlare:

# Works
# FROM emscripten/emsdk:3.1.43
# FROM emscripten/emsdk:3.1.44

# Broken
# FROM emscripten/emsdk:3.1.67
# FROM emscripten/emsdk:3.1.55
# FROM emscripten/emsdk:3.1.51
# FROM emscripten/emsdk:3.1.47
# FROM emscripten/emsdk:3.1.45

# ARG EMSDK_VERSION="3.1.44"
ARG EMSDK_VERSION="3.1.67"
FROM emscripten/emsdk:${EMSDK_VERSION}

MAINTAINER Sean Morris <sean@seanmorr.is>

SHELL ["/bin/bash", "-euxo", "pipefail", "-c"]

RUN apt-get update; \
	DEBIAN_FRONTEND=noninteractive \
	apt-get --no-install-recommends -y install \
		build-essential \
		automake \
		autoconf \
		autogen \
		libtool \
		gettext \
		shtool \
		brotli \
		pkgconf \
		gperf \
		groff \
		bison \
		flex \
		gzip \
		make \
		re2c \
		gdb \
		git \
		sed \
		pv \
		jq

# RUN rm -rf /emsdk/upstream/emscripten
# ADD emscripten /emsdk/upstream/emscripten
# RUN /emsdk/upstream/emscripten/bootstrap

# Update this filename to force a fresh clone of the emscripten repo
RUN touch /force-build

RUN cd /emsdk/upstream && {\
	rm -rf emscripten;\
	git clone https://github.com/endorhq/emscripten.git emscripten --depth=1 --branch seanmorris+dev;\
	emscripten/bootstrap; \
}

RUN emcc --check
