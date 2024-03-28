<?php

use ceLTIc\LTI\Util;
use ceLTIc\LTI\Enum\LogLevel;

/**
 * This page contains the configuration settings for the application.
 *
 * @author  Stephen P Vickers <stephen@spvsoftwareproducts.com>
 * @copyright  SPV Software Products
 * @license  http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3
 */
###
###  Application settings
###
// Uncomment the next line to log all PHP messages
//  error_reporting(E_ALL);
// Set the application logging level
Util::$logLevel = LogLevel::Error;

// Specify a prefix (starting with '/') when the REQUEST_URI server variable is missing the first part of the real path
define('REQUEST_URI_PREFIX', '');

###
###  Database connection settings
###
define('DB_NAME', 'mysql:dbname=lamp;host=database');  // e.g. 'mysql:dbname=MyDb;host=localhost' or 'sqlite:php-rating.sqlitedb'
define('DB_USERNAME', 'lamp');
define('DB_PASSWORD', 'lamp');
define('DB_TABLENAME_PREFIX', '');

###
###  LTI 1.3 Security settings
###
define('SIGNATURE_METHOD', 'RS256');
define('KID', '');  // A random string to identify the key value
define('PRIVATE_KEY', <<< EOD
-----BEGIN RSA PRIVATE KEY-----
MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCwfz/65q9jGRag
RebRAcOtlt9YHKjSkRB2nL4QR2JBT8tXGVLgS34CtRWrbyF/U9GAbFEYQzNVd13J
SCuti49X/XuiSplmyF8meOpSlw3l36aTIizdc74MuojZQig1e0Q/nOVa8lOSrNRS
VeD3LdAgcz/7WPwbcp4krEiF7O4shQwktJ8m/cKAoXoIc8JPQks9s4RK0MLPOpDA
i6UOFTdOzo3gI+206gbzD0VLRnp8mNhZ57O0C2y0GCBfDj8eCrv/5NrFXy1y3mta
KCFXnRnlIkDXGLvDgaV+9XgSnCLFR9I5nMA39EDMWiKroyAEKX6u1vuYIDG5J+QP
nFKgx7SvAgMBAAECggEASCwQzplsWLqWnP1YkFkHWkGanN5DTq+RKt+XfPKjxA9M
GBa75AoawiKodMzhxr5QqhIg6yn3oNhJ2pgPfEzYVePKnaehqP0Ao6vILfOk9D4L
UJkl/Xxp16yjbyv1Y0E/vD99Lj5vXEgeHnkNoCX0uIBIRpCxrsukzVxB37nt/vfO
Qq1BoztwRsM/RbCV2xK6zSssLqTWABQZzGEWGS3QQOyOFFEBhjbtXxg/W/wXcJx6
85dMx0NgUgmPgIMm3m54mxSBbiNU6vslOu56lUVgy4F3rka1u/GndYzrmzUUcpdp
wXGCaJVEmkarM3dINWIJPZWuRUututp2QxWGu4+3oQKBgQDqIH+laF4O0PTssKj5
UXo3tw07dfkVWjyIH4kPpEY0ERbD2PNZ1iS9lEewkdAijovtx57OSWZ4SOmt7rpl
gyY2h7nOr3xHzJ0D2HDNZEPQM9wrv8tIuiBtdkntBNysys9kgwu4CfvT/060IgAe
YmZqcjXLOQSzB+uRQDaXssWTfwKBgQDA/HH+miufmtDSr5KBbTKKiH5SmI5OtxX0
X3OkwwVrjGKoCoq6G2zhnBeA0IvtpBhThm11wDvwAF2OJnEHkQpqiQ5bG6OmF9Du
F6zweOT5jo6ffdE3vzqTJQJO0shgcMCCVqzP872qS50r0i8gf+BrLbp0+n2K4Fji
d2ahQGK20QKBgFWubwhpmYJyli/Itw4G82NQaldIZU+bJmvqno5K4CZN2rbxvp0x
8WAv08yakEEVScBLPaLg2c9LX7l3lF9yD5oFMcqiDil4iD3QB/giqW6YjAq2tf53
n0Zv8735+YiC8EMocjF39eEvne3uQ3zbJf/urCEjTMT4MQ2HInOBySyhAoGAOD/c
ghcxq92WDDK8gxju6E4Mc8qff/YBYi8IJ/fn9ob+onggI0qnG8NBXnxqrKNtq7q8
4NtdHQEeQ7aUr13pKVA1bPzLYDgE38Dq2VSDePHCRF6JwrPsQMNCvvLVELcMhXD6
AcrLd31+nC0xK0nagaLcfAge24G0pp2ivlFj9GECgYEA4HscPFzVctGHgBWbx714
td8yMCb5rQQS72GvLlETctc/4iSmC9PXbeB6yalQ3wmhOv7ZyDq4RP/tOD1bK6eg
tQlSJNa/Sj6Ueb1e9qtl6tECrzVzg+nt6dW8gz+4E+7if33GHMI+sqbL0l5P/bMB
Fv4hR9X+1GTYcR45b3f17+8=
-----END RSA PRIVATE KEY-----
EOD
);

###
###  Dynamic registration settings
###
define('AUTO_ENABLE', false);
define('ENABLE_FOR_DAYS', 0);
?>
