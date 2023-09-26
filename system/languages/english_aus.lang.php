<?php
namespace sts;


class lang {

	private $lang_array = array();

	function __construct() {
	
		$language_array['Add'] 									= 'افزودن';
		$language_array['Edit'] 								= 'ویرایش';
		$language_array['Save'] 								= 'ذخیره';
		$language_array['Cancel'] 								= 'انصراف';
		$language_array['Delete'] 								= 'حذف';
		
		$language_array['Yes'] 									= 'بله';
		$language_array['No'] 									= 'خیر';
		$language_array['On'] 									= 'روشن';
		$language_array['Off'] 									= 'خاموش';

		$language_array['Guest Portal'] 						= 'پورتال مهمان';
		$language_array['Tickets'] 								= 'درخواست';
		$language_array['Login'] 								= 'ورود';
		$language_array['Logout'] 								= 'خروج';
		$language_array['Home'] 								= 'خانه';
		$language_array['Welcome'] 								= 'خوش آمدید';
		$language_array['Profile'] 								= 'حساب';
		$language_array['Users'] 								= 'کاربران';
		$language_array['User'] 								= 'کاربر';
		$language_array['settings'] 							= 'تنضیمات';
		$language_array['Email'] 								= 'ای میل';
		$language_array['Register'] 							= 'ثبت نام';

		$language_array['Name'] 								= 'نام';
		$language_array['Username'] 							= 'نام کاربری';
		$language_array['Password'] 							= 'رمزعبور';
		$language_array['Password Again'] 						= 'تکرار رمزعبور';

		$language_array['Forgot Password'] 						= 'فراوشی رمزعبور';
		$language_array['Create Account'] 						= 'ایجاد حساب';
		$language_array['Login Failed'] 						= 'ورود ناموفق';
		
		$language_array['Departments'] 							= 'حوزه ها';
		$language_array['Priorities'] 							= 'نوع درخواست';
		$language_array['AD'] 									= 'AD';
		$language_array['Plugins'] 								= 'Plugins';
		$language_array['View Log'] 							= 'مشاهده گزارش';
		$language_array['Log'] 									= 'گزارش';
		$language_array['Logs'] 								= 'گزارشات';
		$language_array['All login attempts are logged.']		= 'طراحی و اجرا توسط';
		
		$language_array['You must have an account before you can submit a ticket. Please register here.'] = 
		'برای ثبت درخواست باید حساب کاربری داشته باشید';
		
		$language_array['Account Registration Is Disabled.']	= 'افتتاح حساب غیر فعال است';

		$language_array['Ticket']								= 'درخواست';
		$language_array['Edit Ticket']							= 'ویرایش درخواست';
		$language_array['View Ticket']							= 'نمایش درخواست';

		$language_array['Gravatar']								= 'آواتار';

		$language_array['Change Password']						= 'تغببر رمزعبور';
		$language_array['Current Password']						= 'رمزعبور فعلی';

		$language_array['Email Notifications']					= 'اعلان با ای میل';

		$language_array['New Password']							= 'رمزعبور جدید';
		$language_array['New Password Again']					= 'تکرار رمزعبور جدید';

		$language_array['Profile Updated']						= 'حساب بروز رسانی شد';

		$language_array['New Ticket']							= 'درخواست جدید';
		$language_array['Permissions']							= 'سطح دسترسی';

		$language_array['Status']								= 'وضعیت';
		$language_array['Priority']								= 'نوع درخواست';
		$language_array['Submitted By']							= 'ثبت شده توسط';
		$language_array['Assigned User']						= 'اختصاص داده شده به';
		$language_array['Department']							= 'حوزه';
		$language_array['Added']								= 'افزوده شده';
		$language_array['Updated']								= 'بروز شده';
		$language_array['ID']									= 'شناسه';

		$language_array['User Details']							= 'اطلاعات کاربر';
		$language_array['Phone']								= 'تلفن داخلی';
		$language_array['Files']								= 'فایل ها';

		$language_array['Notes']								= 'پیام ها';
		$language_array['Add Note']								= 'افزودن پیام';
		$language_array['Attach File']							= 'ضمیمه کردن فایل';
		$language_array['Close Ticket']							= 'بستن درخواست';
		
		$language_array['ago']									= 'پیش';

		$language_array['Open']									= 'باز';
		$language_array['Closed']								= 'بسته';

		$language_array['Search']								= 'جست و جو موضوع';
		$language_array['Sort By']								= 'مرتب سازی';
		$language_array['Sort Order']							= 'ترتیب';
		$language_array['Assigned']								= 'اختصاص داده شده به';

		$language_array['Ascending']							= 'صعودی';
		$language_array['Descending']							= 'نزولی';

		$language_array['Close']								= 'بسته';
		$language_array['Filter']								= 'فیلتر';
		$language_array['Clear']								= 'پاک';
		
		$language_array['Failed To Create Account']				= 'افتتاح حساب ناموفق';
		$language_array['Passwords Do Not Match']				= 'رمزعبور مطابق نیست';
		$language_array['Username Invalid']						= 'نام کاربری نامعتبر';
		$language_array['Email Address In Use']					= 'ای میل مورد استفاده است';
		$language_array['Email Address Invalid']				= 'ای میل نامعتبر';
		$language_array['Please Enter A Name']					= 'نام را وارد کنید';
		$language_array['Account Registration Is Disabled.']	= 'افتتاح حساب غیر فعال است';
		$language_array['Create a Support Ticket']				= 'Create a Support Ticket';
		$language_array['Page Limit']							= 'تعداد نمایش';
		
		$language_array['The database needs upgrading before you continue.']	= 'دیتابیس نیاز به بروز رسانی قبل از ادامه دارد';
		
		$language_array['Upgrade']								= 'بر رسانی';
		$language_array['Open Tickets']							= 'باز کردن درخواست';
		$language_array['Copyright']							= 'حق نشر';
		$language_array['This ticket is from a user without an account.'] = 'این درخواست از طرف کاربر فاقد حساب میباشید';

		$language_array['Subject']								= 'موضوع';
		$language_array['Description']							= 'شرح درخواست';
		$language_array['Subject Empty']						= 'موضوع خالی است';
		$language_array['File Upload Failed. Ticket Not Submitted.']						= 'بارگذاری ناموفق فایل درخواست ثبت نمیشود';

		$language_array['Description']							= 'شرح درخواست';
		$language_array['IP Address']							= 'آی پی آدرس';
		$language_array['This page displays the last 100 events in the system.']	= 'این صفحه نشان دهنده 100 رخداد آخر سیستم میباشید';
		
		$language_array['Show All']								= 'نمایش همه';

		$language_array['Item']									= 'شی';
		$language_array['Value']								= 'مقدار';

		$language_array['Severity']								= 'Severity';
		$language_array['Type']									= 'نوع';
		$language_array['Source']								= 'منبع';
		$language_array['User ID']								= 'User ID';
		$language_array['Reverse DNS Entry']					= 'Reverse DNS Entry';
		$language_array['File']									= 'File';
		$language_array['File Line']							= 'File Line';
		
		$language_array['Are you sure you wish to delete this ticket?']							= 'آیل مایل به حذف درخواست میباشید؟';
		
		$language_array['Selected Tickets']						= 'درخواست های انتخابی';
		$language_array['No Tickets Found.']					= 'تیکتی یافت نشد';

		$language_array['Previous']								= 'قبلی';
		$language_array['Next']									= 'بعدی';
		$language_array['Page']									= 'صفحه';

		$language_array['Toggle']								= 'انتخاب';
		$language_array['Do']									= 'اعمال';
		$language_array['New Guest Ticket']						= 'New Guest Ticket';

		$language_array['Address']								= 'سمت';
		$language_array['Authentication Type']					= 'نوع تایید اعتبار';


		$language_array['Program Version']						= 'نسخه برنامه';
		$language_array['Database Version']						= 'نسخه دیتابیس';

		$language_array['There is a software update available.'] = 'بروز رسانی نرم افزار موجود است';

		$language_array['More Information']						= 'اطلاعات بیشتر';
		$language_array['Settings Saved']						= 'تنضیمات ذخیره شد';
		$language_array['Site Settings']						= 'تنضیمات سایت';

		$language_array['View Guest Ticket']					= 'نمایش درخواست میهمان';
		$language_array['Unable to reset password.']			= 'قدر به ریست رمزعبور نمیباشید';
		$language_array['An email with a reset link has been sent to your account.']			= 'ای میل حاوی لینک ریست رمزعبور به حساب شما فرستاده شد';
		
		$language_array['Request Reset']						= 'نیازمند ریست';

		$language_array['If you have forgotten your password you can reset it here.'] = 'در صورت فراموشی رمزعبور از این قسمت میتوانید رمزعبور را ریست کنید';
		$language_array['An email will be sent to your account with a reset password link. Please follow this link to complete the password reset process.'] = 'ای میل حاوی لینک ریست رمزعبور به میل شما ارسال خواهد شد. لطفا برای اتمام روند ریست رمزعبور به لینک عمل کنید';

		$language_array['Update Info']							= 'Update Info';
		$language_array['Update Information']					= 'Update Information';
		$language_array['Installed Version']					= 'نسخه نصب شده';
		$language_array['Available Version']					= 'نسخه دردسترس';
		
		$language_array['Download']								= 'بارگیری';
		$language_array['No updates found.']					= 'بروز رسانی یافت نشد';


		$language_array['Submitter']							= 'Submitter';
		$language_array['Administrator']						= 'Administrator';
		$language_array['Plus User']							= 'Plus User';
		$language_array['Moderator']							= 'Moderator';

		$language_array['Edit User']							= 'ویرایش کاربر';		
		$language_array['View User']							= 'نمایش کاربر';

		$language_array['Local']								= 'محلی';
		$language_array['Active Directory']						= 'اکتیو دایرکتوری';
		
		$language_array['Add User']								= 'افزودن کاربر';
		$language_array['New User']								= 'کاربر جدید';
		
		$language_array['Full Name']							= 'نام کامل';
		
		$language_array['Email (recommended)']					= 'ای میل (توصیه میشود)';
		$language_array['Phone (optional)']						= 'تلفن داخلی';
		$language_array['Address (optional)']					= 'سمت';

		$language_array['Name Empty']							= 'نام خالی';
		$language_array['Username Empty']						= 'نام کاربری خالی';
		$language_array['Password Empty']						= 'رمزعبور خالی';
		$language_array['Username In Use']						= 'نام کاربری در حال استفاده';

		$language_array['Passwords Do Not Match']				= 'رمزعبور منطبق نیست';
		$language_array['Password (if blank the password is not changed)']				= 'رمزعبور (اگر خالی باشد رمزعبور تغببر نخواهد کرد)';

		$language_array['Version']								= 'نسخه';
		$language_array['Disabled']								= 'غیر فعال';
		$language_array['Enabled']								= 'فعال';

		$language_array['This page upgrades the database to the latest version.'] = 'This page upgrades the database to the latest version.';

		$language_array['Your database is currently up to date and does not need upgrading.'] = 'Your database is currently up to date and does not need upgrading.';

		$language_array['Upgrade Complete.']					= 'بروز رسانی تکمیل شد';

		$language_array['Please ensure you have a full database backup before continuing.']	= 'Please ensure you have a full database backup before continuing.';
	
		$language_array['Start Upgrade']						= 'شروع بروز رسانی';
		$language_array['Site Name']							= 'نام سایت';
		$language_array['Domain Name (e.g example.com)']		= 'نام دامین (example.com)';
		$language_array['Script Path (e.g /sts)']				= 'مسیر اسکریپت (/sts)';
	
		$language_array['Port Number (80 for HTTP and 443 for Secure HTTP are the norm)']				= 'شماره پورت';

		$language_array['Secure HTTP (recommended, requires SSL certificate)']		= 'HTTPS';

		$language_array['Default Language']						= 'زبان پیش فرض';
		$language_array['Site Options']							= 'تنضیمات سایت';
		$language_array['HTML & WYSIWYG Editor']				= 'HTML & WYSIWYG Editor';
		$language_array['Account Protection (user accounts are locked for 15 minutes after 5 failed logins)']	= 'محافظت حساب (حساب کاربر بعد از 5 ورود خطا به مدت 15 دقیقه مسدود میشود)';
		
		$language_array['Login Message']						= 'پیام ورود';
		$language_array['Account Registration Enabled']			= 'افتتاح حساب فعال شد';

		$language_array['Gravatar Enabled']						= 'آواتار فعال';
		$language_array['File Storage Enabled (for file attachments)']	= 'ذخیره فایل فعال (برای ضمیمه فایل)';

		$language_array['File Storage Path (must be outside the public web folder e.g./home/sts/files/ or C:\sts\files\)']						= 'مسیر ذخیره فایل';

		$language_array['Ticket Settings']						= 'تنضیمات درخواست';
		$language_array['Ticket Settings Saved']				= 'تنضیمات درخواست ذخیره شد';
		
		$language_array['Are you sure you wish to delete this user?'] = 'آیا مایل به حذف کاربر میباشید؟';

		$language_array['General Settings']						= 'تنضیمات عمومی';
		$language_array['Reply/Notifications for Anonymous Tickets (sends emails to non-users)'] = 'ارسال اعلانیه با میل';

		$language_array['Guest Portal Text']					= 'Guest Portal Text';
		
		$language_array['Please note that removing priorities that are in use will leave tickets without a priority.']					= 'Please note that removing priorities that are in use will leave tickets without a priority.';

		$language_array['Please note that removing departments that are in use will leave tickets without a department.']				= 'Please note that removing departments that are in use will leave tickets without a department.';

		$language_array['Default Department cannot be deleted.']				= 'حوزه پیشفرض قابل پاک کردن نمیباشد';

		$language_array['You cannot delete yourself.']							= 'قادر به حذف خود نمیباشید';
		
		$language_array['Note: LDAP is required for this function to work.']	= 'Note: LDAP is required for this function to work.';

		$language_array['Server (e.g. dc.example.local or 192.168.1.1)']		= 'Server (e.g. dc.example.local or 192.168.1.1)';
		$language_array['Account Suffix (e.g. @example.local)']					= 'Account Suffix (e.g. @example.local)';
		$language_array['Base DN (e.g. DC=example,DC=local)']					= 'Base DN (e.g. DC=example,DC=local)';
		$language_array['Create user on valid login']							= 'ایجاد حساب کاربر با ورود صحصح';

		$language_array['Plugins can be used to add extra functionality to Tickets.']							= 'Plugins can be used to add extra functionality to Tickets.';
		$language_array['Please ensure that you only install trusted plugins.']							= 'Please ensure that you only install trusted plugins.';

		$language_array['Email Settings']										= 'تنضیمات ای میل';
		$language_array['Cron has been run.']									= 'Cron has been run.';

		$language_array['Please ensure that you have the cron system setup, otherwise emails will not be sent or downloaded.'] = 'Please ensure that you have the cron system setup, otherwise emails will not be sent or downloaded.';

		$language_array['Run Cron Manually']									= 'Run Cron Manually';
		$language_array['Test Email']											= 'Test Email';
		$language_array['Email Address']										= 'Email Address';
		$language_array['Send Test']											= 'Send Test';

		$language_array['Outbound SMTP Server']									= 'Outbound SMTP Server';
		$language_array['SMTP Enabled']											= 'SMTP Enabled';
		$language_array['Server']												= 'Server';
		$language_array['Port']													= 'Port';
		$language_array['TLS']													= 'TLS';
		$language_array['Outgoing Email Address']								= 'Outgoing Email Address';
		$language_array['SMTP Authentication']									= 'SMTP Authentication';

		$language_array['POP3 Accounts']										= 'POP3 Accounts';
		$language_array['Hostname']												= 'Hostname';

		$language_array['Email Notification Templates']							= 'Email Notification Templates';
		$language_array['Body']													= 'متن';
		$language_array['New Ticket Note']										= 'New Ticket Note';
	

		$language_array['Add POP Account']										= 'Add POP Account';
		$language_array['Add Account']											= 'Add Account';
		$language_array['Edit Account']											= 'Edit Account';

		$language_array['No POP3 Accounts Are Setup.']							= 'No POP3 Accounts Are Setup.';

		$language_array['Name (nickname for this account)']						= 'Name (nickname for this account)';
		$language_array['Hostname (i.e mail.example.com)']						= 'Hostname (i.e mail.example.com)';
		$language_array['TLS (required for gmail and other servers that use SSL)']	= 'TLS (required for gmail and other servers that use SSL)';
		
		$language_array['Port (default 110)']									= 'Port (default 110)';
	
		$language_array['Download File Attachments']							= 'Download File Attachments';
		$language_array['Leave Message on Server']								= 'Leave Message on Server';

		$language_array['Adding a POP account allows the system to download emails from the POP account and convert them into Tickets.'] = 'Adding a POP account allows the system to download emails from the POP account and convert them into Tickets.';
		$language_array['The system will match email address to existing users and attach emails to ticket notes if the email is part of an existing ticket.'] = 'The system will match email address to existing users and attach emails to ticket notes if the email is part of an existing ticket.';
		$language_array['The Department and Priority options are only used when creating a new ticket and not when attaching an email to an existing ticket.']								= 'The Department and Priority options are only used when creating a new ticket and not when attaching an email to an existing ticket.';

		$language_array['Are you sure you wish to delete this POP3 Account?']	= 'Are you sure you wish to delete this POP3 Account?';

		$language_array['Test Email Failed. View the logs for more details.']	= 'Test Email Failed. View the logs for more details.';
		$language_array['Test Email Failed. Email address was empty.']			= 'Test Email Failed. Email address was empty.';
		$language_array['Test Email Failed. SMTP server not set.']				= 'Test Email Failed. SMTP server not set.';

		$language_array['Error']												= 'خطا';

		$language_array['Captcha']												= 'Captcha';
		$language_array['Anti-Spam Image']										= 'Anti-Spam Image';
		$language_array['Anti-Spam Text']										= 'Anti-Spam Text';
		$language_array['Anti-Spam Text Incorrect']								= 'Anti-Spam Text Incorrect';
		$language_array['Anti-Spam Captcha Enabled (helps protect the guest portal and user registration from bots)']	= 'Anti-Spam Captcha Enabled (helps protect the guest portal and user registration from bots)';

		$language_array['If email address is present notifications can be emailed to the user.'] = 'افتتاح حساب کاربر جدید برای ارسال درخواست';
		$language_array['Local: The password is stored in the local database.']	= 'محلی : رمزعبور در دیتابیس داخلی ذخیره میشود';
		$language_array['Active Directory: The password is stored in Active Directory, password fields are ignored.'] = 'اکتیو دایرکتوری : رمزعبور در اکتیو دایرکتوری ذخیره میشود ';
		$language_array['Note: Active Directory must be enabled and connected to an Active Directory server in the settings page.'] = 'توجه : اکتیو دایرکتوری باید متصل به سامانه باشد';
		$language_array['Submitters: Can create and view their own tickets.'] = '';
		$language_array['Users: Can create and view their own tickets and view assigned tickets.'] = 'کاربران : کاربران قادر به مشاهده درخواست های خود و اختصاص داده شده میباشند';
		$language_array['Moderators: Can create and view all tickets, assign tickets and create tickets for other users.'] = '';
		$language_array['Administrators: The same as Moderators but can add users and change System Settings.'] = 'مدیر : مدیر قادر به مدیریت تمامی درخواست ها و همچنین مدیریت کاربران میباشد';

		$language_array['You cannot change the password for this account.']		= 'شما قادر به تغببر رمزعبور این حساب نمیباشید';

		$language_array['Private Message']										= 'پیام خصوصی';
		$language_array['Private Messages']										= 'پیام های خصوصی';
		$language_array['To']													= 'یه';
		$language_array['From']													= 'از';
		$language_array['Date']													= 'تاریخ';
		$language_array['Unread']												= 'نخوانده';
		$language_array['Sent']													= 'ارسال';
		
		$language_array['Are you sure you wish to delete this message?']		= 'آیا مایل به حذف پیام میباشید؟';

		$language_array['View Message']											= 'نمایش پیام';
		$language_array['Create Message']										= 'نوشتن پیام';
		$language_array['Send']													= 'ارسال';

		$language_array['Notice']												= 'توجه';
		$language_array['Warning']												= 'اخطار';
		$language_array['Authentication']										= 'تایید هویت';
		$language_array['Cron']													= 'Cron';
		$language_array['POP3']													= 'POP3';
		$language_array['Storage']												= 'فضا';
		$language_array['No Messages']											= 'پیامی نیست';
		
		
		//Version 2.1+
		
		$language_array['Custom Fields']										= 'Custom Fields';
		$language_array['Text Input']											= 'Text Input';
		$language_array['Text Area']											= 'Text Area';
		$language_array['Drop Down']											= 'Drop Down';
		$language_array['Dropdown']												= 'Dropdown';
		$language_array['Dropdown Fields']										= 'Dropdown Fields';
		$language_array['Input Type']											= 'Input Type';
		$language_array['Option']												= 'Option';
		$language_array['Input Options']										= 'Input Options';

		$language_array['Custom Fields allow you to add extra global fields to your tickets.']	= 'Custom Fields allow you to add extra global fields to your tickets.';


		$language_array['Text Input (single line of text).']					= 'Text Input (single line of text).';
		$language_array['Text Area (multiple lines of text).']					= 'Text Area (multiple lines of text).';
		$language_array['Dropdown box with options.']							= 'Dropdown box with options.';
		$language_array['All data attached to this custom field will be deleted. Are you sure you wish to delete this Custom Field?'] = 'All data attached to this custom field will be deleted. Are you sure you wish to delete this Custom Field?';

		
		//Version 2.2+
		$language_array['Closed Tickets']										= 'Closed Tickets';
		$language_array['Show Extra Settings']									= 'نمایش تنضیمات بیشتر';
		$language_array['Default Timezone']										= 'Default Timezone';
		$language_array['Colour']												= 'رنگ';
		$language_array['Add Status']											= 'Add Status';
		$language_array['Edit Status']											= 'Edit Status';
		$language_array['HEX Colour']											= 'Hex Colour';
		$language_array['Are you sure you wish to delete this Status?']			= 'آیا شما مایل به پاک کردن این وضعیت میباشید؟';

		
		//Vesion 2.3+
		$language_array['External Services']									= 'External Services';
		$language_array['Add SMTP Account']										= 'Add SMTP Account';
		$language_array['Select SMTP Account']									= 'Select SMTP Account';
		$language_array['Default SMTP Account']									= 'Default SMTP Account';
		$language_array['SMTP Accounts']										= 'SMTP Accounts';
		$language_array['Are you sure you wish to delete this SMTP account?']	= 'Are you sure you wish to delete this SMTP account?';
		$language_array['Port (default 25)']									= 'Port (default 25)';
		$language_array['Pushover Enabled']										= 'Pushover Enabled';
		$language_array['Pushover for all Users']								= 'Pushover for all Users';
		$language_array['Pushover Application Token']							= 'Pushover Application Token';
		$language_array['Pushover Key']											= 'Pushover Key';

		$language_array['Notifications']										= 'اطلاعیه ها';

		$language_array['Below is a list of the users who will receive pushover notifications whenever a new ticket or ticket note is added.']										= 'Below is a list of the users who will receive pushover notifications whenever a new ticket or ticket note is added.';
		
		$language_array['On Behalf Of']											= 'از طرف';
		$language_array['Assigned To']											= 'مختص شده به';
		
		//Version 2.4+
		$language_array['Global Moderator']										= 'Global Moderator';
		$language_array['Staff']												= 'Staff';
		$language_array['Public']												= 'عمومی';
		$language_array['Members']												= 'اعضا';
		$language_array['Add Department']										= 'افزودن حوزه';
		$language_array['Edit Department']										= 'ویرایش حوزه';
		$language_array['Are you sure you wish to delete this Department?']		= 'آیا شما مایل به پاک کردن این حوزه میباشید؟';
		$language_array['Replies']												= 'پاسخ ها';
		$language_array['Reply']												= 'پاسخ';

		$language_array['Staff: Can create and view their own tickets, view assigned tickets and view tickets within assigned departments.'] = '';
		$language_array['Moderators: Can create and view tickets, assign tickets and create tickets for other users within assigned departments.'] = '';
		$language_array['Global Moderators: Can create and view all tickets, assign tickets and create tickets for other users.'] = '';
		$language_array['Administrators: The same as Global Moderators but can add users and change System Settings.'] = 'مدیر : مدیر قادر به مدیریت تمامی درخواست ها و همچنین مدیریت کاربران میباشد';
		
		//Version 2.5+
		$language_array['Email Account']										= 'Email Account';
		$language_array['Map']													= 'Map';
		$language_array['Send Welcome Email']									= 'ارسال ای میل خوشامدگویی';
		$language_array['New User (Welcome Email)']								= 'New User (Welcome Email)';
		$language_array['Are you sure you wish to clear the queue?']			= 'Are you sure you wish to clear the queue?';
		$language_array['Reset Cron']											= 'Reset Cron';
		$language_array['Clear Queue']											= 'Clear Queue';
		
		//Version 3.0+
		$language_array['General']												= 'عمومی';
		$language_array['API']													= 'API';
		$language_array['Default Theme']										= 'Default Theme';
		$language_array['Default Sub Theme']									= 'Default Sub Theme';
		
		$language_array['API Settings']											= 'API Settings';
		$language_array['API Enabled']											= 'API Enabled';
		$language_array['API Accounts']											= 'API Accounts';
		$language_array['Key']													= 'Key';
		$language_array['Access Level']											= 'Access Level';
		$language_array['API Key']												= 'API Key';
		$language_array['Guest']												= 'Guest';

		$language_array['Authentication Settings']								= 'تنضیمات تایید هویت';
		$language_array['LDAP']													= 'LDAP';
		$language_array['Base DN (e.g. OU=sydney,DC=example,DC=local)']			= 'Base DN (e.g. OU=sydney,DC=example,DC=local)';

		$language_array['Profile']												= 'حساب';
		$language_array['Logout']												= 'خروج';
		$language_array['Auth']													= 'اعتبار';
			
		//Version 3.2+
		$language_array['AppTrack']												= 'AppTrack';
		$language_array['Dashboard']											= 'میز کار';
		$language_array['Applications']											= 'Applications';
		$language_array['month']												= 'ماه';
		$language_array['day']													= 'روز';
		$language_array['hour']													= 'ساعت';
		$language_array['minute']												= 'دقیقه';
		$language_array['Transfer to Department']								= 'انتقال به حوزه';
		$language_array['An email will be sent to this department.']			= 'ای میلی به این حوزه فرستاده خواهد شد';
		$language_array['Assign User']											= 'کاربر اختصاص شده';
		$language_array['An email will be sent to this person.']				= 'ای میلی به این شخص فرستاده خواهد شد';
		$language_array['Last Replier']											= 'آخرین پاسخ دهنده';
		$language_array['Change State']											= 'Change State';
		$language_array['Email notifications are not sent when editing a ticket from this page.']	= 'اعلانیه ای میل برای ویرایش درخواست فرستاده نخواهد شد';
		$language_array['Allow Login']											= 'اجازه ورود';
		$language_array['Account Added']										= 'حساب افزوده شد';
		$language_array['Assigned Tickets']										= 'درخواست اختصاص داده شده';
		$language_array['Email Address (recommended)']							= 'ای میل (توصیه میشود)';
		$language_array['Phone Number (optional)']								= 'تلفن داخلی';
		$language_array['Check for updates']									= 'Check for updates';
		$language_array['New Ticket Reply']										= 'New Ticket Reply';
		$language_array['New Department Ticket']								= 'درخواست جدید حوزه';
		$language_array['New Department Ticket Reply']							= 'پاسخ درخواست جدید حوزه';
		$language_array['Assigned User To Ticket']								= 'Assigned User To Ticket';
		$language_array['Reply/Notifications to ticket owner for new tickets via POP3 download']								= 'Reply/Notifications to ticket owner for new tickets via POP3 download';
		$language_array['Online Plugins Directory']								= 'Online Plugins Directory';
		$language_array['Plugins are located on the web server in the user/plugins/ folder.']								= 'Plugins are located on the web server in the user/plugins/ folder.';
		$language_array['Add API Key']											= 'Add API Key';
		$language_array['Published Version']									= 'Published Version';
		$language_array['s']													= '';
		$language_array['Show Filter']											= 'نمایش فیلتر';
		
		//3.5+
		$language_array['Reset']												= 'ریست';
		$language_array['Merge']												= 'ادغام';
	
	
	    //custom
		
		$language_array['Select Ticket (for Mass Action)']						= 'انتخاب درخواست (برای اعمال جمعی)';
		$language_array['Show Open Tickets']									= 'نمایش درخواست های باز';
		$language_array['Show Closed Tickets']									= 'نمایش درخواست های بسته';
		$language_array['Add Ticket']											= 'ثبت درخواست';
		$language_array['Transfer Ticket']										= 'انتقال درخواست';
		$language_array['Min Date']												= 'از تاریخ';
		$language_array['Max Date']												= 'تا تاریخ';
		$language_array['Min Added Date']									    = 'تاریخ را انتخاب کنید';
		$language_array['Max Added Date']										= 'تاریخ را انتخاب کنید';
		$language_array['Showing']												= 'نمایش';
		$language_array['second']											    = 'ثانبه';
		$language_array['Change Status']									    = 'تغببر وضعیت';
		$language_array['History']											    = 'تاریخچه';
		$language_array['Public Reply']								        	= 'پاسخ عمومی';
		$language_array['Private Reply']							        	= 'پاسخ خصوصی';
		$language_array['This ticket was merged into another ticket.']			= 'این درخواست با درخواست دیگری ادغام شده است';
		$language_array['Password Changed']										= 'رمزعبور تغببر کرد';
		$language_array['New Passwords Do Not Match']							= 'رمزعبور جدید مطابق نیست';
		$language_array['Current Password Incorrect']						    = 'رمزعبور فعلی نادرست است';
		$language_array['Show Extra Options']							    	= 'نمایش امکانات بیشتر';
		$language_array['An email will be sent to']                             = 'ای میلی فرستاده خواهد شد به';
		$language_array['Add Reply']											= 'افزودن پاسخ';
		$language_array['Users viewing this ticket: ']							= ':کاربرانی که در حال مشاهده درخواست میباشند';
		$language_array['Carbon Copy Reply']								    = 'ارسال کپی پاسخ با میل';
		$language_array['Carbon Copy']											= 'ارسال کپی با میل';
		$language_array['Date Due']										     	= 'تاریخ مقرر';
		$language_array['Merge Tickets']										= 'ادغام درخواست ها';
		$language_array['Primary']											    = 'اصلی';
		$language_array['Please select a primary ticket.']										= 'لطفا درخواست اصلی را انتخاب کنید';
		$language_array['View']											        = 'مشاهده';
		$language_array['Change By']											= 'توسط';
		$language_array['Ticket Created']											= 'درخواست ساخته شده';
		$language_array['Due']											      = 'مقرر';
		$language_array['Created']											= 'ساخته شده';
		$language_array['Reverse View Ticket Order']											= 'برعکس کردن ترتیب مشاهده درخواست';
		$language_array['Edited']											= 'ویرایش شده';
		$language_array['View Profile']											= 'مشاهده حساب';
		$language_array['Your Open Tickets']											= 'درخواست های باز شما';
		$language_array['Assigned Open Tickets']											= 'درخواست های باز اختصاص شده';
		$language_array['Settings']											= 'تنضیمات';
		$language_array['Status Changed']											= 'تغببر وضعیت';
		$language_array['Status']											= 'وضعیت';
		$language_array['Auto Status Changed']											= 'تغببر وضعیت خودکار';
		
		$language_array['Attach More']											= 'افزودن بیشتر';
		$language_array['Allows you to Carbon Copy this ticket to other users e.g. user@example.com,user2@example.net. Note: CCed users will be able to view the entire ticket thread via the guest portal.']											= 'ارسال کپی درخواست توسط میل به کاربر دیگری';
		$language_array['Allows you to Carbon Copy this reply to other users e.g. user@example.com,user2@example.net.']											= 'ارسال کپی درخواست توسط میل به کاربر دیگری';
		$language_array['Note: If enabled CCed users will be able to view the entire ticket thread via the guest portal (but not via email).']											= '';
		$language_array['Email(optional)']											= 'ای میل (ختیاری)';
		$language_array['Display Dashboard']											= 'نمایش میز کار';
		$language_array['Ticket Views Timeout (how long to display "users viewing this ticket" alert after they have left the ticket)']											= 'مدت زمانی که پیغام "کاربر در حال مشاهده این درخواست میباشد" نمایانگر باشد';
		$language_array['Note: The PHP LDAP extension is required for Active Directory and LDAP.']											= 'توجه : افزونه LDAP برای اکتیو دایرکتوری مورد نیاز میباشد';
		$language_array['1 Hour']											= '1 ساعت';
		$language_array['30 Seconds']											= '30 ثانیه';
		$language_array['1 Minute']											= '1 دقیقه';
		$language_array['5 Minutes']											= '5 دقیقه';
		$language_array['30 Minutes']											= '30 دقیقه';
		$language_array['2 Hours']											= '2 ساعت';
		$language_array['4 Hours']											= '4 ساعت';
		$language_array['6 Hours']											= '6 ساعت';
		$language_array['Session Expiration Timeout']											= 'مدت زمان انقضا کانکشن';
		$language_array['Default Department must be public.']											= 'حوزه پیشفرض باید عمومی باشد';
		$language_array['On top of the normal email notifications you can send notices to the following user groups within the department.']											= 'شما میتوانید اعلانی برای گروه های کاربری زیر ارسال نمایید';
		$language_array['Are you sure you wish to delete this Priority?']											= 'آیا شما مایل به پاک کردن این نوع درخواست میباشید؟';
		$language_array['Canned Responses']											= 'پاسخ های پیشفرض';
		$language_array['Canned Response']											= 'پاسخ پیشفرض';
		$language_array['Canned Response can be used by all users except Submitters.']											= 'پاسخ پیشفرض برای پاسخ دادن سریع به درخواست ها میباشد';
		$language_array['Response']											= 'پاسخ';
		$language_array['Insert Canned Response']											= 'استفاده از پاسخ پیشفرض';
		$language_array['This status must be of type "Open" and cannot be changed.']											= '';
		$language_array['This status must be of type "Closed" and cannot be changed.']											= '';
		$language_array['']											= '';
		$language_array['']											= '';
		$language_array['']											= '';
		$language_array['']											= '';
		
		$language_array['']											= '';
		
		$this->lang_array 			= $language_array;
		
	}
	
	public function get() {
		return $this->lang_array;
	}

}	
?>