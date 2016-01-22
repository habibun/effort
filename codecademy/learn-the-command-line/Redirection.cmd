
echo "Hello"
The echo command accepts the string "Hello" as standard input, and echoes the string "Hello"


echo "Hello" > hello.txt
The > command redirects the standard output to a file


cat hello.txt
The cat command outputs the contents of a file to the terminal


cat oceans.txt > continents.txt
> takes the standard output of the command on the left, and redirects it to the file on the right. Here the standard output of cat oceans.txt is redirected to continents.txt.



cat glaciers.txt >> rivers.txt
>> takes the standard output of the command on the left and appends (adds) it to the file on the righ



cat < lakes.txt
< takes the standard input from the file on the right and inputs it into the program on the left.


cat volcanoes.txt | wc
| is a "pipe". The | takes the standard output of the command on the left, and pipes it as standard input to the command on the right. You can think of this as "command to command" redirection.
Here the output of cat volcanoes.txt is the standard input of wc. in turn, the wc command outputs the number of lines, words, and characters in volcanoes.txt, respectively.




cat volcanoes.txt | wc | cat > islands.txt
Multiple |s can be chained together. Here the standard output of cat volcanoes.txt is "piped" to the wc command. The standard output of wc is then "piped" to cat. Finally, the standard output of cat is redirected to islands.txt.



sort lakes.txt
sort takes the standard input and orders it alphabetically for the standard output. Here, the lakes in sort lakes.txt are listed in alphabetical order.



cat lakes.txt | sort > sorted-lakes.txt
Here, the command takes the standard output from cat lakes.txt and "pipes" it to sort. The standard output of sort is redirected to sorted-lakes.txt.


uniq deserts.txt
uniq stands for "unique" and filters out adjacent, duplicate lines in a file. Here uniq deserts.txt filters out duplicates of "Sahara Desert", because the duplicate of 'Sahara Desert' directly follows the previous instance. The "Kalahari Desert" duplicates are not adjacent, and thus remain.


sort deserts.txt | uniq
A more effective way to call uniq is to call sort to alphabetize a file, and "pipe" the standard output to uniq. Here by piping sort deserts.txt to uniq, all duplicate lines are alphabetized (and thereby made adjacent) and filtered out.


sort deserts.txt | uniq > uniq-deserts.txt
Here we simply send filtered contents to uniq-deserts.txt, which you can view with the cat command.


grep Mount mountains.txt
grep stands for "global regular expression print". It searches files for lines that match a pattern and returns the results. It is also case sensitive. Here, grep searches for "Mount" in mountains.txt.


grep -i Mount mountains.txt
grep -i enables the command to be case insensitive. Here, grep searches for capital or lowercase strings that match Mount in mountains.txt.


grep -R Arctic /home/ccuser/workspace/geography
grep -R searches all files in a directory and outputs filenames and lines containing matched results. -R stands for "recursive"


grep -Rl Arctic /home/ccuser/workspace/geography
grep -Rl searches all files in a directory and outputs only filenames with matched results. -R stands for "recursive" and l stands for "files with matches"



sed 's/snow/rain/' forests.txt
sed stands for "stream editor". It accepts standard input and modifies it based on an expression, before displaying it as output data. It is similar to "find and replace".
Let's look at the expression 's/snow/rain/':
s: stands for "substitution". it is always used when using sed for substitution.
snow: the search string, the text to find.
rain: the replacement string, the text to add in place.
In this case, sed searches forests.txt for the word "snow" and replaces it with "rain." Importantly, the above command will only replace the first instance of "snow" on a line.





sed 's/snow/rain/g' forests.txt
The above command uses the g expression, meaning "global". Here sed searches forests.txt for the word "snow" and replaces it with "rain", globally. All instances of "snow" on a line will be turned to "rain".










