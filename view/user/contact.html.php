<div class="container">
    <div>
        <h1 id="test">Contact</h1>
        <form class="contact_form" action="/?c=user&a=contact" method="post">
            <div>
                <label for="email">Adresse mail du compte: </label>
                <input type="email" name="email" id="email" placeholder="Adresse mail ...">
            </div>

            <div>
                <label for="object">Objet: </label>
                <input type="text" name="object" id="object" placeholder="Objet ...">
            </div>

            <div>
                <label for="content">Contenu: </label>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </div>

            <div>
                <button id="contactButton">Envoyer</button>
            </div>

        </form>
    </div>
</div>