ls -a
-a - lists all contents, including hidden files and directories

ls -l
-l - lists all contents of a directory in long format

ls -t
-t - order files and directories by the time they were last modified.

ls -alt
Here, ls -alt lists all contents, including hidden files and directories, in long format, ordered by the date and time they were last modified.





cp frida.txt lincoln.txt
The cp command copies files or directories. Here, we copy the contents of frida.txt into lincoln.txt.


cp biopic/ray.txt biopic/notorious.txt historical/
To copy a file into a directory, use cp with the source file as the first argument and the destination directory as the second argument




*
These special characters are called wildcards



cp * satire/
The * selects all files in the working directory, so here we use cp to copy all files into the satire/ directory


cd ../../action/
Here we navigate up two directories, and then into the action/ directory.



cp m*.txt scifi/
Here, m*.txt selects all files in the working directory starting with "m" and ending with ".txt", and copies them to scifi/.


mv superman.txt superhero/
To move a file into a directory, use mv with the source file as the first argument and the destination directory as the second argument. Here we move superman.txt into superhero/


mv wonderwoman.txt batman.txt superhero/
To move multiple files into a directory, use mv with a list of source files as the first arguments, and the destination directory as the last argument. Here, we move wonderwoman.txt and batman.txt into superhero/.



mv batman.txt spiderman.txt
To rename a file, use mv with the old file as the first argument and the new file as the second argument. By moving batman.txt into spiderman.txt, we rename the file as spiderman.txt.






rm waterboy.txt
Here we remove the file waterboy.txt from the filesystem.



rm -r slapstick/
The -r is an option that modifies the behavior of the rm command. The -r stands for "recursive," and it's used to delete a directory and all of its child directories.
