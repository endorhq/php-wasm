FROM trzeci/emscripten:1.39.18-fastcomp
# FROM emscripten/emsdk:latest
MAINTAINER Sean Morris <sean@seanmorr.is>

SHELL ["/bin/bash", "-c"]

RUN set -euxo pipefail;\
	apt-get update; \
	apt-get --no-install-recommends -y install \
		build-essential \
		libxml2-dev \
		libicu-dev \
		automake \
		autoconf \
		autogen \
		libtool \
		gettext \
		shtool \
		pkgconf \
		bison \
		flex \
		make \
		re2c \
		gdb \
		git \
		pv
