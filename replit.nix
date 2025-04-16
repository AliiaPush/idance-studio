{ pkgs ? import <nixpkgs> {} }:

pkgs.mkShell rec {
  buildInputs = [
    pkgs.php
    pkgs.phpPackages.composer
  ];

  shellHook = ''
    export REPLIT_DIR="php"
  '';

  deployment = {
    run = ["php", "-S", "0.0.0.0:3000", "-t", "php"];
  };
}
