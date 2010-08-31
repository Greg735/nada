<?php
$lang['resource_manager'] = "Менеджер ресурсов";
$lang['edit_resource'] = "Редактировать ресурс";
$lang['select_data_access_type'] = "Выбрать тип доступа к данным";
$lang['msg_select_data_access_type'] = " Выберите тип доступа к данным";
$lang['create_folder_failed'] = "Невозможно создать папку: ";
$lang['folder_not_found'] = "Папка не найдена: ";
$lang['file_delete_failed'] = "Файл не был удален:";

$lang['manage_files'] = "Управление файлами";
$lang['external_resources'] = "Внешние ресурсы";

$lang['delete_selection'] = "Удалить выбранное";
$lang['folder'] = "Папка";
$lang['select_upload_folder'] = "Выбрать папку для загрузки";
$lang['select_upload_files'] = "Выбрать файлы для загрузки";
$lang['upload_files'] = "Загрузить файлы";

$lang['not_linked'] = "Не соедин.";
$lang['data_files'] = "Файлы данных";
$lang['other_resources'] = "Другие ресурсы";
$lang['total_files_count'] = "Общее количество файлов: "; 
$lang['data_selection_apply_to_files'] = "Выбор данного типа доступа к данным будет применен к таким файлам"; 
$lang['links'] = "Ссылки";
$lang['study_no_data_files_assigned'] = 'Нет файлов, назначенных как файлы данных в этом исследовании. Для назначения файлов данных используйте %s tab'; 

$lang['add_external_resource'] = "Добавить внешний ресурс";
$lang['edit_external_resource'] = "Редактировать внешний ресурс";
$lang['import_external_resources'] = "Импортировать внешние ресурсы";

$lang['error_import_failed'] = "Файл не может быть импортирован";
$lang['resource_already_exists'] = "Ресурс уже существует, импорт отменен: ";
$lang['n_resources_imported'] = "%d ресурсов импортировано";

$lang['link_resource_home'] = "Ресурсы";

//edit fields
$lang['authors'] = "Автор(ы)";
$lang['language'] = "Язык";
$lang['format'] = "Формат";
$lang['contributors'] = "Спонсор(ы)";
$lang['publishers'] = "Издатель(и)";
$lang['description'] = "Описание";
$lang['abstract'] = "Краткое изложение";
$lang['table_of_contents'] = "Содержание";
$lang['resource_url_filepath'] = "URL или относительный путь к ресурсу";

$lang['resource_type'] = "Тип ресурса";
$lang['legend_file_exist'] = "Файл найден";
$lang['legend_file_no_exist'] = "Файл не найден";

//resources tab
$lang['link_add_new_resource'] = "Добавить новый ресурс";
$lang['link_import_rdf'] = "Импортировать RDF";
$lang['link_fix_broken'] = "Починить неработающие ссылки";

//import rdf page
$lang['title_import_rdf'] = "Импортировать внешние ресурсы";
$lang['select_rdf_file'] = "Выбрать файл (.RDF)";
$lang['create_folder_structure'] = "Создать структуру папки";


//fix links pagee
$lang['title_fix_broken'] = "Починить неработающие ссылки";
$lang['instruction_fix_broken'] = "Эта утилита корректирует пути к файлам внешних ресурсов так, чтобы они совпадали с путями на текущем сервере. Сначала загрузите все файлы, на которые есть ссылки в ваших внешних ресурсах, а затем нажмите Починить для обновления ссылок на эти файлы.";
$lang['fix_it'] = "Починить!";
$lang['n_resources_fixed'] = "%d ресурсов обновлены. Ниже выведены подробные результаты работы скрипта:";
$lang['legend_not_fixed'] = "УДАЛОСЬ ПОЧИНИТЬ";
$lang['legend_fixed'] = "НЕ УДАЛОСЬ ПОЧИНИТЬ";

//links tab
$lang['indicator_database'] = "База данных показателей";
$lang['study_website'] = "Сайт исследования";

$lang['country'] = "Страна";
$lang['home_folder_hover'] = "ROOT папка исследования";
$lang['home_folder'] = "Основная папка";
$lang['folder_view'] = "Просмотр папки";
$lang['folder_view_hover'] = "Переход к просмотру папки";
$lang['switch_view'] = "Изменить вид";
$lang['switch_view_hover'] = "Изменить отображение страницы";
$lang['upload_files_hover'] = "Обновить файлы";
$lang['switch_view_details'] = "Переход к подробному просмотру";

//these values come from the database
$lang['Licensed data files'] = "Файлы лицензированных данных";
$lang['Direct access'] = "Прямой доступ";
$lang['Public use files'] = "Файлы общего пользования";
$lang['Data accessible only in data enclave'] = "Данные, доступные исключительно в анклаве данных";
$lang['--Data not accessible to users--'] = "—Данные, недоступные для пользователей--";

$lang['msg_no_data_access_type_assigned'] = "Данное исследование не подпадает ни под один тип доступа к данным. Это означает, что данные из этого сайта недоступны для скачивания для такого исследования.";
$lang['msg_licensed_data_access_type_assigned'] = "Тип лицензионного файла подпадает под данное исследование. Это означает, что пользователи должны зарегистрироваться, войти, а также заполнить бланк заявки на лицензированные файлы.";
$lang['msg_direct_data_access_type_assigned'] = "Данное исследование подпадает под тип прямого доступа к данным. Это означает, что пользователи могут загружать данные непосредственно, без регистрации на сайте.";
$lang['msg_public_data_access_type_assigned'] = "Данное исследование подпадает под тип общего пользования даннями. Это означает, что пользователи должны будут зарегистрироваться и войти на ваш сайт перед тем, как скачать ваши данные.";
$lang['msg_enclave_data_access_type_assigned'] = "Данное исследование подпадает под тип анклава файлов данных. Это означает, что данные по данному исследованию доступны для скачивания с этого сайта";

//types
$lang['Document, Administrative [doc/adm]']=	"Документ, административный [doc/adm]";
$lang['Document, Analytical [doc/anl]']=	"Документ, аналитический [doc/anl]";
$lang['Document, Other [doc/oth]']=		"Документ, другой [doc/oth]";
$lang['Document, Questionnaire [doc/qst]']=	"Документ, вопросник [doc/qst]";
$lang['Document, Reference [doc/ref]']=	"Документ, ссылка [doc/ref]";
$lang['Document, Report [doc/rep]']=	"Документ, отчет [doc/rep]";
$lang['Document, Technical [doc/tec]']=	"Документ, технический [doc/tec]";
$lang['Audio [aud]']=			"Аудио [aud]";
$lang['Database [dat]']=		"База данных [dat]";
$lang['Map [map]']=			"Карта [map]";
$lang['Microdata File [dat/micro]']=	"Файл микроданных [dat/micro]";
$lang['Photo [pic]']=			"Фото [pic]";
$lang['Program [prg]']=			"Программа [prg]";
$lang['Table [tbl]']=			"Таблица [tbl]";
$lang['Video [vid]']=			"Видео [vid]";
$lang['Web Site [web]']=		"Сайт [web]";

//formats
$lang['Compressed, Generic [application/x-compressed]']= 	"Архивация, общая [application/x-compressed]";
$lang['Compressed, ZIP [application/zip]']=			"Архивация, ZIP [application/zip]";
$lang['Data, CSPro [application/x-cspro]']= 			"Данные, CSPro [application/x-cspro]";
$lang['Data, dBase [application/dbase]']= 			"Данные, dBase [application/dbase]";
$lang['Data, Microsoft Access [application/msaccess]']= 	"Данные, Microsoft Access [application/msaccess]";
$lang['Data, SAS [application/x-sas]']= 			"Данные, SAS [application/x-sas]";
$lang['Data, SPSS [application/x-spss]']= 			"Данные, SPSS [application/x-spss]";
$lang['Data, Stata [application/x-stata]']=			"Данные, Stata [application/x-stata]";
$lang['Document, Generic [text]']= 				"Документ, Generic [text]";
$lang['Document, HTML [text/html]']=				"Документ, HTML [text/html]";
$lang['Document, Microsoft Excel [application/msexcel]']= 	"Документ, Microsoft Excel [application/msexcel]";
$lang['Document, Microsoft PowerPoint [application/mspowerpoint]']= "Документ, Microsoft PowerPoint [application/mspowerpoint]";
$lang['Document, Microsoft Word [application/msword]']= 	"Документ, Microsoft Word [application/msword]";
$lang['Document, PDF [application/pdf]']= 			"Документ, PDF [application/pdf]";
$lang['Document, Postscript [application/postscript]']= 	"Документ, Postscript [application/postscript]";
$lang['Document, Plain [text/plain]']= 				"Документ, Plain [text/plain]";
$lang['Document, WordPerfect [text/wordperfect]']= 		"Документ, WordPerfect [text/wordperfect]";
$lang['Image, GIF [image/gif]']= 				"Изображение, GIF [image/gif]";
$lang['Image, JPEG [image/jpeg]']=				"Изображение, JPEG [image/jpeg]";
$lang['Image, PNG [image/png]']= 				"Изображение, PNG [image/png]";
$lang['Image, TIFF [image/tiff]']= 				"Изображение, TIFF [image/tiff]";

$lang['status'] = "связанный";
/* End of file resource_manager_lang.php */
/* Location: ./system/language/russian/resource_manager_lang.php */