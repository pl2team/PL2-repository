#Git tudnival�k
------------------------------------------------- 
```bash

git init
```
Ezzel l�trehozom a helyi adatb�zis

```bash

git clone https://github.com/pl2team/PL2-repository.git
```
Ezzel lekl�nozom a t�voli szervert (csak egyszer kell megcsin�lni)

```bash

cd PL2-repository
```
Ezzel benavig�lok a let�lt�tt mapp�ba, mert abba kell majd dolgozni

```bash

git remote -v
```
inket, hogy biztosan j�-e. Az egyik a fetch v�g�, a m�sik a push v�g�.

```bash

git checkout develop
```
Ezzel arra az �gra v�ltok, amiben majd dolgozni kell.

--------------------------------------------------------

```bash

git pull origin develop
```
Ezzel lementem a t�voli szerver aktu�lis �llapot�t

```bash

git add .
```
Ezzel berakok minden (�j elemet) a commitol�sra v�r�khoz.

```bash

git status -s
```
Ezzel megn�zem, hogy van-e nem commitolt, vagy nem pussolt adatom.
Ha van A jellel, akkor

```bash

git commit -m "Kovspec feltoltese"
```
ezzel l�trehozom a commitot

Utols� l�p�s:
```bash

git push origin develop
```
ezzel t�lt�dik fel