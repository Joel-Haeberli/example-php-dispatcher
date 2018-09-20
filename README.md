# Simple/Example PHP Dispatcher

NOTE: Don't use the Dispatcher like it is. He's untested and not secure. It should only help to understand the how a dispatcher could be written in PHP.

## How it works
Just copy the files in a working webserver and call the directory site in the browser.

The Dispatcher can dispatch four different commands:

- {YOUR_ADDRESS}/?cmd=getCategories 
- {YOUR_ADDRESS}/?cmd=getCategory 
- {YOUR_ADDRESS}/?cmd=getUsers 
- {YOUR_ADDRESS}/?cmd=getUser

These are all dummy-implementations. To understand how it works, just take a look in the source-code. The commands return static values.