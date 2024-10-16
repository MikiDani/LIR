<?php

return [

	// AuthenticationController messages

	'auth' => [
		'textnopassentered' => 'No password entered.',
		'textwrongusername' => 'Wrong username or email.',
		'textnousernameoremail' => 'No username or email entered.',
		'textincorrectlogin' => 'Incorrect login!',
		'textsuccessfullogin' => 'Successful login.',
		'textneparerequired' => 'Name, email, and password are required. ',
		'textinvalidemail' => 'Invalid email format. ',
		'textemailtaken' => 'The email address is already taken. ',
		'textusernameuse' => 'The username is already in use. ',
		'textpasswordshot' => 'Password must be at least 8 characters long.',
		'textregistrationsuccessful' => 'The registration is successful!',
		'textusernameshort' => 'Username must be at least 8 characters long. ',
		'textemailuse' => 'The email is already in use. ',
		'textuserupdated' => 'User has been updated.',
		'textloggedout' => 'Logged out successfully.',
		'textuserisnotauth' => 'User is not authenticated',
		'textnotemailformat' => 'You did not enter the e-mail address format.',
		'textincorrectemail' => 'Incorrect email entry.',
		'textsentletter1' => 'We have sent the letter to your address. ',
		'textsentletter2' => ' Check your letters!',
		'textuserconfirmation' => ' succesfuly confirmation.',
		'texterrorauth' => 'An error occurred during authentication.',
		'texterrorauthuser' => 'An error occurred during authentication user.',
		'textuserdeletedsuccessful' => 'User deleted successfully.',
		'texterrorinidentication' => 'Error in identification.',
		'textyoucanlog' => 'You can log in here.',
		'textfildsincorrectly' => 'The fields were filled in incorrectly.',
		'textnotauth' => 'You have not yet authenticated yourself by email.',
		'textyoucanregistration' => 'You can registration in here.',
		'textfillingerror' => 'Filling error.',
		'textrobot' => 'Maybe you are a robot?',
		'textpassdonotmatch' => 'Passwords do not match.',
		'textinvalidpassword' => 'Invalid password!',
		'textcheckboxnotselected' => 'Confirm checkbox not selected.',
		'textnewpass1' => 'Hi',
		'textnewpass2' => 'Here you can enter your new password for logging in.',
		'textanerror' => 'An error occurred!',
		'textyoucantry' => 'You can try your new password.',
		'textemptyinputfill' => 'Empty input fill.',
	],

	// Pages Blade messages

	'start' => [
		'textwelcome' => 'Welcome to the page!',
	],

	'login' => [
		'textlogin' => 'Login',
		'textusernameoremail' => 'Username or email',
		'textpassword' => 'Password',
		'textistay' => 'I stay logged in.',
		'textiwouldlike' => 'I would like to register.',
		'textiforgot' => 'I forgot my password!',
		'textpleaseenter' => 'Please enter the email address you registered with.',
		'textsend' => 'Send',
	],

	'registration' => [
		'textregistration' => 'Registration',
		'textusername' => 'Username',
		'textemail' => 'E-mail',
		'textpassword' => 'Password',
		'textpasswordagin' => 'Password agin',
		'textpleaseresult' => 'Please give me the result.',
		'textenterthesum' => 'Enter the sum ofthe numbers:',
		'textigo' => 'I go to the login page.',
	],

	'newpass' => [
		'textnewpass' => 'New Password',
		'textrepeatpass' => 'Repeat password',
		'textsave' => 'Save',
	],

	'userprofile' => [
		'textuserprofile' => 'User Profile',
		'textemail' => 'E-mail',
		'textyoucurrent' => 'Your current password is required for authentication.',
		'textusername' => 'Username',
		'textrank' => 'Rank',
		'textiwantto' => 'I want to change my password.',
		'textnewpass' => 'New password',
		'textnewpassagain' => 'New password again',
		'textmodifyprofile' => 'Modify profile',
		'textiwouldlike' => 'I would like to delete my profile.',
		'textyourcurrent' => 'Your current password is required for authentication.',
		'textconfirmation' => 'Confrirmation',
		'textdelete' => 'Delete',
	],

	'confirm' => [
		'textlabel' => 'Confirmation of email address',
		'texthello' => 'Hi',
		'textcontent' => 'To confirm your email address, please press the confirm link:',
		'textfooter' => 'WebEngine - The best engine!',
	],

	'forgotemail' => [
		'textlabel' => 'Forgotten password',
		'texthello' => 'Hi',
		'textcontent' => 'You have indicated that you have forgotten your password. If you want to set a new one, click on the link:',
		'textfooter' => 'WebEngine - The best engine!',
	], 
	
	// Dinamic

	'adminindex' => [
		'text01' => 'Welcome to the admin page! Choose one menu item.',
	],

	'adminmenu' => [
		'textfrontend' => 'Frontend page',
		'textindex' => 'Index', 
		'textpagemenus' => 'Page Menus list', 
		'textuseroptions' => 'User Options', 
		'textlogout' => 'Logout', 
	],

	// Page Menu List

	'pagemenulist' => [
		'textaddnewrootmenu' => 'Add new Menu Element',
		'textsaveallchanges' => 'Save All Changes',
		'textmenujsonisempty' => 'The menu is now empty.',
		'textselectedelementlabel' => 'Element not selected.',
		'textmoduletypelabel' => 'Module type:',
		'textinsertnewmodule' => 'Insert New Module:',
		'textaddnew' => 'Inserted',
		'textmoduledeletealert' => 'Are you sure how to delete?',
		'textselectmodulebutton' => 'Select Module',
		'textmustbesaved' => 'Must be saved',
	],

	'modules' => [
		'news' => [
			'textnewsmodulename' => 'News module',
			'textaddnewnews' => 'Insert new news row',
			'textnewstitle' => 'Title',
			'textnewsmessage' => 'Message',
			'textnewsdatetime' => 'Datetime',
			'textnewsimage' => 'Image',
			'textnewslink' => 'URL link',
			'textnewssubmit' => 'Add new news',
			'texteditsubmit' => 'Save changes',
			'textallopen' => 'All open',
			'textallclose' => 'All close',
			'texteditnewsdeletemessage' => 'Are you sure you want to delete the message?',
			'textemptymessage' => `You deleted everything. Don't forget to save it.`,
		],
		'sendmail' => [
			'textsendmailmodulename' => 'Send e-mail module',
			'textnodatamessage' => 'No data added now.',
			'textmodulemessage' => 'Display text in the module:',
			'textnewslettermessage' => 'Should the newsletter subscription appear?',
			'textsubmit' => 'Save changes',
		],
		'gallery' => [
			'textgallerymodulename' => 'Gallery modul',
			'textpicturename' => 'Image name',
			'textpictureative' => 'The image is visible',
			'textgalleryfiletext' => 'Select file:',
			'textnodatamessage' => 'There are currently no images uploaded.',
			'textnewimagesubmit' => 'Upload a new image',
			'textgallerysubmit' => 'Save changes',
		],
	],
];