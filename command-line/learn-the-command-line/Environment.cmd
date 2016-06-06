nano is a command line text editor. It works just like a desktop text editor like TextEdit or Notepad, except that it is accessible from the command line and only accepts keyboard input.

The ^ stands for the Ctrl key.



nano hello.txt
"Hello, I am nano."

Ctrl + O saves a file. 'O' stands for output.
Ctrl + X exits the nano program. 'X'
Ctrl + G opens a help menu.


nano ~/.bash_profile
echo "Welcome, Jane Doe"
Type Ctrl + O to save the file.
Press Enter to write the filename.
Type Ctrl + X to exit.
Finally, type clear to clear the terminal window.


source ~/.bash_profile
The command source ~/.bash_profile activates the changes in ~/.bash_profile for the current session. Instead of closing the terminal and needing to start a new session, source makes the changes available right away in the session we are in.


The ~ represents the user's home directory.
The . indicates a hidden file.


nano ~/.bash_profile
alias pd="pwd"
source ~/.bash_profile
pd

The alias command allows you to create keyboard shortcuts, or aliases, for commonly used commands.
The command source ~/.bash_profile makes the alias pd available in the current session.




alias hy="history"
alias ll="ls -la"
hy
ll



export USER="Jane Doe"
echo $USER

The line USER="Jane Doe" sets the environment variable USER to a name "Jane Doe". Usually the USER variable is set to the name of the computer's owner.
The line export makes the variable to be available to all child sessions initiated from the session you are in. This is a way to make the variable persist across programs.
At the command line, the command echo $USER returns the value of the variable. Note that $ is always used when returning a variable's value. Here, the command echo $USER returns the name set for the variable.



export PS1=">> "
export PS1=">> " sets the command prompt variable and exports the variable. Here we change the default command prompt from $ to >>.


echo $HOME


echo $PATH

/bin/pwd
This is the script that is executed when you type the pwd command.


/bin/ls
his is the script that is executed when you type the ls command.



PATH is an environment variable that stores a list of directories separated by a colon.


env
The env command stands for "environment", and returns a list of the environment variables for the current user




env | grep PATH
env | grep PATH is a command that displays the value of a single environment variable. Here the standard output of env is "piped" to the grep command. grep searches for the value of the variable PATH and outputs it to the terminal.
