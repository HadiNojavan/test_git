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