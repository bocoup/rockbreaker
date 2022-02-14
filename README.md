# Rockbreaker

A method of mitigating the perf damage caused by third party scripts of dubious quality and their many, many dependencies. This repo currently only contains the start of a test case.

Adding the delay depends on PHP; currently spinning up a local server using `$ php -S localhost:7777`

## Deprecated

Note that the `queuescripts.js` file uses `document.domain`, which is in the process of being removed from browsers:

https://developer.chrome.com/blog/immutable-document-domain/
