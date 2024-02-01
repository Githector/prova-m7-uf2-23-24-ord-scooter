<div class="container col-11 mx-auto">
        
        

        <table class="table">
        <h2>Ítems valoració</h2>
            <thead>
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Punts</th>
                    <th scope="col">Fet?</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="font-weight-bold text-danger">ADMIN</td>
                    <td class="font-weight-bold text-danger"></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Al entrar la URL localhost la única opció que es veu al navbar és Reset</td>
                    <td>1</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>Al introduir el username admin i clicar sobre "Go!" Ens porta a una vista on al menú hi podem veure les següentes opcions: Scooter, LogOut, Rents i Reset. Aquesta combinació només pot aparèixer amb l'usuari admin, per tant ha d'estar condicionada.</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>A la part superior de la vista d'scooter, es saluda a l'usuari amb el username..</td>
                    <td>1</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>L'admin (només ell) pot veure el formulari que permet crear patinets.</td>
                    <td>1</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Els scooters que s'introdueixen al controller de reset (els de test) es visualitzen de forma correcta i de forma dinàmica amb tota la informació, inclosa la imatge.</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>Els botons d'eliminar scooter, estan ben referenciats i funcionen correctament.</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>No es possible crear una scooter sense la marca, model o preu per minut. Si ho intentem, ens mostra un missatge flash que ens informa de l'error (vermell -> ko).</td>
                    <td>1</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>No es possible crear una scooter sense la imatge. Si ho intentem, ens mostra un missatge flash que ens informa de l'error (vermell -> ko)</td>
                    <td>1</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Si no pot crear el patinet, retorna al formulari i recupera el text que inicialment havíem posat perquè l'usuari no l'hagi de tornar a introduir.</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>Si totes les dades del formulari són correctes es guarda el patinet i es mostra al llistat amb tota la informació i imatge de forma correcta,</td>
                    <td>3</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Els botons d'eliminar scooter, estan ben referenciats i funcionen correctament.</td>
                    <td>1</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>L'admin tan sols veu el botó d'eliminar. Qualsevol altre botó que veu l'usuari estàndard està amagat.</td>
                    <td>1</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Si cliquem sobre logOut, fa desaparèixer l'usuari loguejat de la variable de sessió i ens redirigeix a la vista de login.</td>
                    <td>1</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td class="font-weight-bold text-danger">USUARI ESTÀNDARD</td>
                    <td class="font-weight-bold text-danger"></td>
                    <td></td>
                </tr>
                <tr class="bg-light">
                    <td>Quant entra l'usuari estàndard, aquest pot veure tots els patinets i veu la opció de llogar-los. Els botons estan ben referenciats. No veu cap altre botó. Veu, tant els patinets que s'han introduit a través del controler de reset com els que ha introduït prèviament l'admin.</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Al clicar sobre el botó "Rent" (blau) d'algun dels patinets, comença el lloguer i aquest es canvïa per un altre que permetrà finalitzar el lloguer (verd).</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>Al fer un logout, i entrar amb un altre usuari, el nou usuari no podrà finalitzar el lloguer de l'anterior usuari. Sobre el patinet que havia llogat l'anterior usuari, li apareixerà un botó de no disponibilitat (groc) que estarà inhabilitat. Cap usuari podrà tocar lloguers d'altres usuaris.</td>
                    <td>3</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>El nou usuari podrà llogar un patinet i despres finalitzar el lloguer. Al fer-ho, el patinet tornarà a estar disponible per llogar.</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>Cada vegada que hi ha algun canvi d'estat en el lloguer d'un patinet, s'informa a l'usuari amb un missatge flash (verd -> ok).</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>El nou usuari podrà llogar un patinet i despres finalitzar el lloguer. </td>
                    <td>3</td>
                    <td><input type="checkbox"></td>
                </tr>

                <td class="font-weight-bold text-danger">ADMIN</td>
                    <td class="font-weight-bold text-danger"></td>
                    <td></td>
                </tr>
                <tr class="bg-light">
                    <td>Al clicar sobre la opció "Rents", l'administrador veu una taula d'informació dels lloguers (finalitzats i actius). Al menys veu la marca, el model i l'usuari que ha realitzat el lloguer de forma correcta.</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Veu el dia i hora d'inici del lloguer de forma dinàmica i amb el mateix format. Per exemple: 31/01/2024 - 03:56:29</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>Si un lloguer ha finalitzat veu el dia i la hora de finalització en el format indicat en l'anterior ítem.</td>
                    <td>3</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Si un lloguer no ha finalitzat, a End veurà un text en vermell: Not finished.</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr class="bg-light">
                    <td>Si el lloguer ha finalitzat veurà el preu. Aquest preu serà els segons que han passat multiplicats pel preu per minut. En el cas de que passi més d'un minut, el sistema ha de contar la totalitat dels segons de forma correcta. Per exemple: 1 minut i 10 segons són 70 segons.</td>
                    <td>3</td>
                    <td><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>Si un lloguer no ha finalitzat, a Price veurà un text en vermell: Not finished.</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>

                <td class="font-weight-bold text-danger">PROTECCIÓ RUTES</td>
                    <td class="font-weight-bold text-danger"></td>
                    <td></td>
                </tr>
                <tr class="bg-light">
                    <td>Si un usuari que no és admin intenta anar a la ruta /rent/index se'l redirigirà a la pàgina de login.</td>
                    <td>2</td>
                    <td><input type="checkbox"></td>
                </tr>
                <td class="font-weight-bold text-danger">ESTRUCTURA I CODI</td>
                    <td class="font-weight-bold text-danger"></td>
                    <td></td>
                </tr>
                <tr class="bg-light">
                    <td>Estructura codi, arquitectura...</td>
                    <td>6</td>
                    <td><input type="checkbox"></td>
                </tr>

                <tr>
                    <td class="font-weight-bold text-danger">TOTAL</td>
                    <td class="font-weight-bold text-danger">55</td>
                    <td></td>
                </tr>
            </tbody>

        </table>
    </div>