git init
Ezzel l�trehozom a helyi adatb�zis
git clone https://github.com/pl2team/PL2-repository.git
Ezzel lekl�nozom a t�voli szervert (csak egyszer kell megcsin�lni)
cd PL2-repository
Ezzel benavig�lok a let�lt�tt mapp�ba, mert abba kell majd dolgozni
git remote -v
Ezzel lek�rem azt a 2 linket, hogy biztosan j�-e. Az egyik a fetch v�g�, a m�sik a push v�g�.
git checkout develop
Ezzel arra az �gra v�ltok, amiben majd dolgozni kell.
--------------------------------------------------------
git pull origin develop
Ezzel lementem a t�voli szerver aktu�lis �llapot�t

git add .
Ezzel berakok minden (�j elemet) a commitol�sra v�r�khoz.

git status -s
Ezzel megn�zem, hogy van-e nem commitolt, vagy nem pussolt adatom.
Ha van A jellel, akkor

git commit -m "Kovspec feltoltese"
majd ezzel felt�lt�m:

k�zvetlen�l push el�tt lehet pullolni is.
git push origin develop




