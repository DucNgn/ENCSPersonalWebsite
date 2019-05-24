<?php include './visitCtr/visitInfor.php'; ?>
<?php include './share/header.html'; ?>
<?php include './share/body.html' ; ?>

<!-- Activate changing title function -->
<script>
changeTitle("Duke's Website");
</script>

<br />
<br />
	<h1 id="ctr">Welcome to Duke's personal website </h1>
	
<blockquote id="ctr">
  <p><em>"A personal webpage created by a techie nerd"</em></p>
</blockquote>
	
	<h2>EDUCATION:</h2>
	<h3>High school: <a href="./Education/ChuVanAn.php">Chu Van An National High School for the Gifted</a></h3>
	<h3>University: <a href="./Education/Concordia.php">Concordia University</a></h3>

<br />

<form method="post" action ="RequestMess.php">
  <fieldset>
	 <legend id="ctr"><h3> Leave me a message </h3> </legend>
    <label>Name:</label>
    <input type="text" placeholder="Michale Jackson" id="nameField">
   
	<label>Please select your title</label>
    <select id="PersonTitle">
      <option value="Mr">Mr.</option>
      <option value="Mrs">Mrs.</option>
      <option value="Miss">Miss</option>
      <option value="no">other</option>
    </select>
	  
	  <label>E-mail Address:</label>
	 <input type="email" name="email" placeholder="abc@gmail.ca">
	  
    <label>Message</label>
    <textarea placeholder="Hi Duke, ..." id="commentField"></textarea>
	 
    <div class="float-right">
      <input type="checkbox" id="confirmField">
      <label class="label-inline" for="confirmField">Send a copy to yourself</label>
    </div>
	  
    <input class="button-primary" type="submit" value="Send">
	  
	<input class="button button-outline" type ="reset">
  </fieldset>
</form>
	
<?php include './share/footer.html'; ?>