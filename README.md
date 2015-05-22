7Langit Skill Test Project
<br>
Andri Ari Pratama - Backend Developer
P. (+62) 811 7010 321
M. andriaripratama@gmail.com

User
====
Username : jobs<br>
Password : 1234

Progress
========
<p>16/5 - Prepare Drupal and Services Module</p>
<p>16/5 - Diving to Drupal Documentation and 3rd party resources ( LEARN PROCESS )</p>
<p>17/5 - Create Leaderboard Module</p>
<p>17/5 - Finding error ( Return data only "< result />" )</p>
<p>18/5 - Create Score Module for grab data from "leaderboard" table.</p>
<p>18/5 - Score Module can grab data, @ http://104.131.152.44/7langit/api/score/retrieve , ( Data input manually from Database panel ).</p>
<p>18/5 - Disable Leaderboard Module and Score, write new module call Scoreboard </p>
<p>18/5 - Scoreboard Module can insert new Score to table (database) and retrieve ( @ http://104.131.152.44/7langit/api/scoreboard .json / .xml )</p>
<p>19/5 - Create Text Up Module for Uploading TXT file</p>
<p>19/5 - Issue on Text Up Module, file can't move to 'public://' directory. error on implementation file_save_upload function.</p>
<p>19/5 - Testing using file_save_data function, work and save to 'public://' directory and 'file_managed' table, but the data/content must be provide as String, not data/contetn from the file.</p>
<p>19/5 - Text up Module finally work! Text file save to 'public://text' folder and file detail save to 'file_managed' table. ( @ http://104.131.152.44/7langit/api/textup .json / .xml )</p>
<p>20/5 - Add "Text Up Front end" Module, list all files that already uploaded. @ ( http://104.131.152.44/7langit/textup )</p>
<p>21/5 - Add Security to Module, only auth user can see and access module</p>
<p>21/5 - Add "Scoreboard Front end" Module, list all Top 10 Games score. @ ( http://104.131.152.44/7langit/scoreboard )</p>
<p>22/5 - Add "Glogin" Module. Custom Page for Login, Register and Forget Password. @ ( http://104.131.152.44/7langit/game/login - /game/signup - /game/forget-password )</p>
<p>22/5 - Fixing Login in Glogin Module.</p>
<p>22/5 - Fixing Mail Function for Register in Glogin Module.</p>
<p>22/5 - Update Forget Password in Glogin Module.</p>

API Endpoint
============

<h4>Login, Register, Forget Password</h4>
<ul>
	<li>- Login - POST - http://104.131.152.44/7langit/api/u/login</li>
	<li>- Register - POST - http://104.131.152.44/7langit/api/u/register</li>
	<li>- Forget Password - POST - http://104.131.152.44/7langit/api/u/request_new_password</li>
</ul>
<h4>Scoreboard</h4>
<ul>
	<li>- Scoreboard (list all score) - GET - http://104.131.152.44/7langit/api/scoreboard</li>
	<li>- Scoreboard (create new score) - POST - http://104.131.152.44/7langit/api/scoreboard</li>
</ul>
<h4>File Upload</h4>
<ul>
	<li>- File Text Upload (list all uploaded text) - GET - http://104.131.152.44/7langit/api/textup</li>
	<li>- File Text Upload (upload new text file) - POST - http://104.131.152.44/7langit/api/textup</li>
</ul>

Custom Page
===========
<h4>File Upload</h4>
<ul>
	<li>- list all uploaded file - http://104.131.152.44/7langit/textup</li>
	<li>- list Top 10 Games score - http://104.131.152.44/7langit/scoreboard</li>
</ul>
<h4>Custom Login, Register and Forget Password Page</h4>
<ul>
	<li>- Login - http://104.131.152.44/7langit/game/login</li>
	<li>- Register - http://104.131.152.44/7langit/game/signup</li>
	<li>- Forget Password - http://104.131.152.44/7langit/game/forget-password</li>
</ul>