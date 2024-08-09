## path traversal attack

    -This attack is also known as “dot-dot-slash”, “directory traversal”, “directory climbing” and “backtracking”.
    -A path traversal attack (also known as directory traversal) aims to access files and directories that are stored outside the web root folder.
    - By manipulating variables that reference files with “dot-dot-slash (../)” sequences and its variations or by using absolute file paths.
    - it may be possible to access arbitrary files and directories stored on file system including application source code or configuration and critical system files.
    - It should be noted that access to files is limited by system operational access control (such as in the case of locked or in-use files on the Microsoft Windows operating system).

 ## Double Encoding

    -This attack technique consists of encoding user request parameters twice in hexadecimal format in order to bypass security controls or cause unexpected behavior from the application.
    - It’s possible because the webserver accepts and processes client requests in many encoded forms.

    - By using double encoding it’s possible to bypass security filters that only decode user input once.
    - The second decoding process is executed by the backend platform or modules that properly handle encoded data, but don’t have the corresponding security checks in place.

    - Attackers can inject double encoding in pathnames or query strings to bypass the authentication schema and security filters in use by the web application.

    - There are some common characters sets that are used in Web applications attacks. For example, Path Traversal attacks use ../ (dot-dot-slash) , while XSS attacks use < and > characters. These characters give a hexadecimal representation that differs from normal data.


        For example,
            - ../ (dot-dot-slash) characters represent %2E%2E%2F in hexadecimal representation.
            - When the % symbol is encoded again, its representation in hexadecimal code is %25.
            - The result from the double encoding process ../ (dot-dot-slash) would be %252E%252E%252F:

## resources
- **[owasp](https://owasp.org/www-community/Double_Encoding)**
- **[owasp](https://owasp.org/www-community/Path_Traversal)**
