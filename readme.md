# Safarif Iframe Cookie Test

## How to use

Create a host entry in `/etc/hosts`:

```
127.0.0.1   ad
```

Start servers:

```shell
php -S localhost:2001 root.php
php -S localhost:2002 ad.php
```

Open localhost:2001.

Refresh the page once. Firefox and Chrome will display a different output than Safari.