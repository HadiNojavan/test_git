<?php


first we write init to create repo 
then we write git add file name 

then we have to make checkpoint to our file 
git commit -m "your massage"


then write                          git log to see result 

to add all                              git add .

to get back to before check point use           git check hashcode

to get back to current state write which we call head state    git checkout main

if you made change and you want to discard it               git checkout -f main 

2types of repository:
    local repo by writing git init
    remote repo store on the server like github

git automaticlly name remote repo as origin 
to add github           git remote add name_of https://github.com/HadiNojavan/test_git.git we say name origin

to push our local committ to github
                git push -u origin main

to see out list of branch    git branch 
to add new branch                       git branch-name 
to go there               git chekout name-branch
 new branch will inherit form the main branch
 to change this way                 git branch-name branch-source


 to add new branch to our remote repo       git push -u origin feature
 once you add new branch and edit one file 
    write git add learn.(only  the edited file)   git commit .m "your massage"    then  git push
    we only see last edited file in reo     

if we want to update our local brach beacuse some one add new file to git :
    git pull 


i made new branch call cd_read.md and i inherit from main branch 
then i made some change on read.md then commit it to see changes 
now i can merge my whole folder to main folder to add new line that i wrote it in read.md 

The branch you see in VSCode is your local branch (e.g., features).
Deleting the branch on GitHub only removes the remote branch (e.g., origin/features).
Your local branch still exists unless you explicitly delete it. use git brancd -d name-branch

The branch you see in VSCode is your local branch (e.g., features).
Deleting the branch on GitHub only removes the remote branch (e.g., origin/features).
Your local branch still exists unless you explicitly delete it.


main is the default branch name in Git (previously master).
It’s the main line of development. When you clone or create a repository, you usually start on main.

origin is the default name Git uses for the remote repository (the one on GitHub, GitLab, etc.).
It’s just an alias (shortcut) for the remote URL. Instead of typing the full URL every time, you use origin.

git pull origin here

when many developer edit same line code -> merge conflict