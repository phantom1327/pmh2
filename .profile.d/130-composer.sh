mlib="/sys/fs/cgroup/memory/memory.limit_in_bytes"
if [[ -f "$mlib" ]]; then
export COMPOSER_MEMORY_LIMIT=${COMPOSER_MEMORY_LIMIT:-$(cat "$mlib")}
fi
export COMPOSER_MIRROR_PATH_REPOS=${COMPOSER_MIRROR_PATH_REPOS:-1}
export COMPOSER_NO_INTERACTION=${COMPOSER_NO_INTERACTION:-1}
export COMPOSER_PROCESS_TIMEOUT=${COMPOSER_PROCESS_TIMEOUT:-0}
export PATH="$HOME/.heroku/php/bin:$PATH"
# now composer is on the path
# no scan dir so no newrelic starts up and outputs messages etc
export PATH="$PATH:$(realpath "$(PHP_INI_SCAN_DIR= composer config --no-plugins bin-dir)")"
