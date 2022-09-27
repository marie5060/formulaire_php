<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="lastName"  name="user_last_name">
      <label  for="prenom">Prenom :</label>
      <input  type="text"  id="prenom"  name="user_first_name">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
    <label  for="number">Numero :</label>
        <input  type="tel"  id="number"  name="user_number"> 
    </div>
    <div> 
        <label>Sujet</label>
        <select name="user_subject"> 
        <option valeur="php" >PHP</option>
   <option valeur="js">Javascript</option>
   <option valeur="ang">Angular</option>
   <option valeur="other">Autre</option>
    </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>


