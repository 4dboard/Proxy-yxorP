# You can find the new timestamped tags here: https://hub.docker.com/r/gitpod/workspace-full/tags
FROM gitpod/workspace-full:2022-05-08-14-31-53

# Change your version here
RUN sudo update-alternatives --set php $(which php8.1) && sudo install-packages php-xdebug