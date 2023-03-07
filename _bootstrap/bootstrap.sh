#!/bin/sh
python3 -m venv bootstrap
source bootstrap/bin/activate
pip install --upgrade pip setuptools
pip install ansible requests docker
ansible-galaxy collection install awx.awx:17.0.0 
read -s -p "Password for AWX: " TOWER_PASS
read -s -p "Password for ONTAP Clusters: " ONTAP_PASS
export ONTAP_PASSWORD=$ONTAP_PASS
export TOWER_PASSWORD=$TOWER_PASS
curl https://raw.githubusercontent.com/johnwarlick/netapp-ontap-ansible-awx-demo/main/_bootstrap/bootstrap.yml -o bootstrap.yml
curl https://raw.githubusercontent.com/johnwarlick/netapp-ontap-ansible-awx-demo/main/_bootstrap/.tower_cli.cfg.j2 -o .tower_cli.cfg.j2
ansible-playbook bootstrap.yml