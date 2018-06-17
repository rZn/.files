To install the McMyAdmin service:

- Place MCMA_Service.exe in the same directory as your McMyAdmin installation
- Open a command prompt as administrator
- Navigate to the directory where MCMA is installed.
- MCMA_Service [-silent] [-autostart] -install

You can use -uninstall to remove the service.

-install or -uninstall must be the last argument
-silent suppresses any dialogs as a result of the operation.
-autostart sets the service startup type to 'Automatic'

The service will run as the "NETWORK SERVICE" user. It will automatically set the correct permissions 
to allow the "NETWORK SERVICE" user to read/write the MCMA installation directory.