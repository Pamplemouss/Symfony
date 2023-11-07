type: install
name: SymfonyTest
id: symfonytest
categories: ["apps/dev-and-admin-tools"]
logo: https://symfony.com/logos/symfony_black_03.png

description: |
  Test Symfony
  
ssl: true

nodes:
  - image: pamplemouss/symfonytest:latest
    count: 1
    cloudlets: 8
    fixedCloudlets: 1
    nodeGroup: cp
    displayName: FrontWeb
    volumes:
      - /var/www


success: |
  Votre Application a été déployée sur Hidora avec succès !