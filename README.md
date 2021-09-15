# GLU-projectInterface

## examples\minimal

Use the lightswitch button on the page 'lightSwitch.html' to turn the light on the page 'light.html' on and off.
(set backgroundColor of this page to white or black)
The lightStatus (on=1, off=0) is stored in the file 'lightStatus.txt'.
This value is read and returned as a JSON by 'lightStatusUpdate.php'.
This value is updated by 'lightStatusUpdate.php' in combination with a query string variable.

## examples\json

Use the control button on the page 'controller.html' to move the car and set the name of the car on the page 'car.html'.
The direction and name of the car are stored in the file 'data.json'.
The 'data.json' is updated by 'dataUpdate.php' in combination with a query string variable.

## examples\one_page_styled

Use the styled lightswitch to switch the light on and off.
For the best result: Open the same (online) page on two different devices.
Switching the light on one device also swicthes the light on the page of the other device.
Assuming they both use the same online page.

Online example can be found at:
https://www.kunstman.nl/light/
