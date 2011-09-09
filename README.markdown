# README #

A simple, CakePHP based application, ideal for a personal Pastebin, comes complete with the ability to password protect pastes, and cool short URL's.

MikeyPaste installation instructions:

1] Edit  ```/app/config/database.php``` and add your database details.
2] Upload ```/app/config/database/schema.sql``` to your database server and import it.
3] Upload all the files to your server.

Enjoy.

# Styling #

All CSS is in ```/app /webroot/css``` - IMPORTANT, you will need to edit ```/app/views/layouts/default.ctp``` and edit the line which points to the CSS file.

The "Wrapper" file is in ```/app/views/layouts/default.ctp``` - you should only need to edit this file. (if you need to)

# License # 

Copyright (c) 2011, Michael Burton
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.