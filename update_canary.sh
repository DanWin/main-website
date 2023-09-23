#!/bin/bash
gpg -u daniel@danwin1210.de --clear-sign - << EOF | ssh root@192.168.178.29 tee /var/www/html/canary.txt
I am Daniel.
I am in control of encryptions keys and the server infrastructure.
I have not suffered a data breach, or disclosed encryption keys to a 3rd party, nor have I been forced to modify the system to allow access or information leakage to a third party.
I will update this canary within 14 days. (If I forget, email me)
Today is `date +%Y-%m-%d`

Latest bitcoin block hash:
`curl -s https://blockchain.info/q/latesthash`
EOF
