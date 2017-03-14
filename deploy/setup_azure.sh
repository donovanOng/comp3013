#!/bin/bash

resourceGroup=$1

azure group create -l uksouth -n $resourceGroup

azure group deployment create -g $resourceGroup --template-file azuredeploy.json --parameters-file  azuredeploy.parameters.json
