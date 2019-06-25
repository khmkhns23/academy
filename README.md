sudo apt-get install git
git init
git config --global user.name "git-username"
git config --global user.email youremail
# สร้าง .gitignore ใช้บรรจุชื่อไฟล์หรือโฟลเดอร์ที่ไม่ต้องการให้git push
git status
git add -- all .
git commit -m "My git comment for commit"
#ใน github เพิ่ม Repository ใหม่ จะได้ URL https://www.github.com/<git-username>/<reponame>.git ให้ copyไว้
git remote add origin https://www.github.com/<git-username>/<reponame>.git
git push -u origin master

# เมื่อจะ update version ขึ้น git : commit ใหม่
$ git status
[...]
$ git add --all .
$ git status
[...]
$ git commit -m "My comment says about some update"
[...]
$ git push
