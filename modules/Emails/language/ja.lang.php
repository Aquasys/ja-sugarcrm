<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

$mod_strings = array(
	'LBL_FW'=>'FW:',
	'LBL_RE'=>'RE:',
	'LBL_BUTTON_CREATE'=>'作成',
	'LBL_BUTTON_EDIT'=>'編集',
	'LBL_QS_DISABLED'=>'（このモジュールではクイックサーチは利用できません。選択ボタンを利用してください。）',
	'LBL_SIGNATURE_PREPEND'=>'返信時に上記シグネチャを利用',
	'LBL_EMAIL_DEFAULT_DESCRIPTION'=>'依頼されたお見積です（このテキストは変更できます）。',
	'LBL_EMAIL_QUOTE_FOR'=>'Quote for: ',
	'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR'=>'見積のレイアウトファイルが存在しません: $layout',
	'LBL_QUOTE_LAYOUT_REGISTERED_ERROR'=>'見積のレイアウトがmodules/Quotes/Layouts.phpに登録されていません。',
	'LBL_CONFIRM_DELETE'=>'このフォルダを削除しても良いですか？',
	'LBL_ENTER_FOLDER_NAME'=>'Please enter a folder name',
	'LBL_ERROR_SELECT_MODULE'=>'Please select a module for the Related to field',
	'ERR_ARCHIVE_EMAIL'=>'エラー: 保存するメールを選択して下さい。',
	'ERR_DATE_START'=>'開始日',
	'ERR_DELETE_RECORD'=>'取引先を削除するにはレコード番号を指定する必要があります。',
	'ERR_NOT_ADDRESSED'=>'電子メールにはTo, Cc, BCCアドレスが必要です',
	'ERR_TIME_START'=>'開始時間',
	'ERR_TIME_SENT'=>'Time Sent',
	'LBL_ACCOUNTS_SUBPANEL_TITLE'=>'取引先',
	'LBL_ADD_ANOTHER_FILE'=>'別のファイルを追加',
	'LBL_ADD_DASHLETS'=>'ダッシュレットの追加',
	'LBL_ADD_DOCUMENT'=>'ドキュメントを追加',
	'LBL_ADD_ENTRIES'=>'エントリーの追加',
	'LBL_ADD_FILE'=>'ファイルを追加',
	'LBL_ARCHIVED_EMAIL'=>'保存メール',
	'LBL_ARCHIVED_MODULE_NAME'=>'電子メール',
	'LBL_ATTACHMENTS'=>'添付:',
	'LBL_HAS_ATTACHMENT'=>'Has Attachment?:',
	'LBL_BCC'=>'Bcc:',
	'LBL_BODY'=>'本文:',
	'LBL_BUGS_SUBPANEL_TITLE'=>'バグトラッカー',
	'LBL_CC'=>'Cc:',
	'LBL_COLON'=>':',
	'LBL_COMPOSE_MODULE_NAME'=>'電子メール作成',
	'LBL_CONTACT_FIRST_NAME'=>'取引先担当者の名',
	'LBL_CONTACT_LAST_NAME'=>'取引先担当者の姓',
	'LBL_CONTACT_NAME'=>'取引先担当者:',
	'LBL_CONTACTS_SUBPANEL_TITLE'=>'取引先担当者',
	'LBL_CREATED_BY'=>'作成者',
	'LBL_DATE_AND_TIME'=>'送信日時:',
	'LBL_DATE_SENT'=>'送信日付:',
	'LBL_DATE'=>'送信日付:',
	'LBL_DELETE_FROM_SERVER'=>'サーバからメッセージを削除',
	'LBL_DESCRIPTION'=>'詳細',
	'LBL_EDIT_ALT_TEXT'=>'代替テキストの編集',
	'LBL_SEND_IN_PLAIN_TEXT'=>'Send in Plain Text',
	'LBL_EDIT_MY_SETTINGS'=>'設定の編集',
	'LBL_EMAIL_ATTACHMENT'=>'電子メール添付',
	'LBL_EMAIL_EDITOR_OPTION'=>'HTMLメールを送信',
	'LBL_EMAIL_SELECTOR'=>'選択',
	'LBL_EMAIL'=>'電子メール:',
	'LBL_EMAILS_ACCOUNTS_REL'=>'電子メール: 取引先',
	'LBL_EMAILS_BUGS_REL'=>'電子メール: 不具合',
	'LBL_EMAILS_CASES_REL'=>'電子メール: ケース',
	'LBL_EMAILS_CONTACTS_REL'=>'電子メール: 契約',
	'LBL_EMAILS_LEADS_REL'=>'電子メール: リード',
	'LBL_EMAILS_OPPORTUNITIES_REL'=>'電子メール: 商談',
	'LBL_EMAILS_NOTES_REL'=>'電子メール：ノート',
	'LBL_EMAILS_PROJECT_REL'=>'電子メール: プロジェクト',
	'LBL_EMAILS_PROJECT_TASK_REL'=>'電子メール: プロジェクトタスク',
	'LBL_EMAILS_PROSPECT_REL'=>'電子メール: ターゲット',
	'LBL_EMAILS_TASKS_REL'=>'電子メール: タスク',
	'LBL_EMAILS_USERS_REL'=>'電子メール: ユーザ',
	'LBL_EMPTY_FOLDER'=>'No Emails to display',
	'LBL_ERROR_SENDING_EMAIL'=>'電子メール送信エラー',
	'LBL_ERROR_SAVING_DRAFT'=>'Error Saving Draft',
	'LBL_FORWARD_HEADER'=>'転送されたメッセージ:',
	'LBL_FROM_NAME'=>'From（名前）',
	'LBL_FROM'=>'From:',
	'LBL_REPLY_TO'=>'Reply To:',
	'LBL_HTML_BODY'=>'HTMLボディ',
	'LBL_INVITEE'=>'受信者',
	'LBL_LEADS_SUBPANEL_TITLE'=>'リード',
	'LBL_MESSAGE_SENT'=>'電子メールを送信しました。',
	'LBL_MODIFIED_BY'=>'更新者',
	'LBL_MODULE_NAME_NEW'=>'電子メール作成・保存',
	'LBL_MODULE_NAME'=>'電子メール',
	'LBL_MODULE_TITLE'=>'',
	'LBL_MY_EMAILS'=>'My Emails',
	'LBL_NEW_FORM_TITLE'=>'電子メール作成・保存',
	'LBL_NONE'=>'なし',
	'LBL_NOT_SENT'=>'送信エラー',
	'LBL_NOTE_SEMICOLON'=>'注: 複数の電子メールアドレスの区切る場合はセミコロンを使用してください。',
	'LBL_NOTES_SUBPANEL_TITLE'=>'添付ファイル',
	'LBL_OPPORTUNITY_SUBPANEL_TITLE'=>'商談',
	'LBL_PROJECT_SUBPANEL_TITLE'=>'プロジェクト',
	'LBL_PROJECT_TASK_SUBPANEL_TITLE'=>'プロジェクトタスク',
	'LBL_RAW'=>'メールデータ',
	'LBL_SAVE_AS_DRAFT_BUTTON_KEY'=>'R',
	'LBL_SAVE_AS_DRAFT_BUTTON_LABEL'=>'ドラフト保存',
	'LBL_SAVE_AS_DRAFT_BUTTON_TITLE'=>'ドラフト保存[Alt+R]',
	'LBL_SEARCH_FORM_DRAFTS_TITLE'=>'ドラフト検索',
	'LBL_SEARCH_FORM_SENT_TITLE'=>'送信済み電子メール検索',
	'LBL_SEARCH_FORM_TITLE'=>'電子メール検索',
	'LBL_SEND_ANYWAYS'=>'このメールには件名がありません。送信/保存しますか？',
	'LBL_SEND_BUTTON_KEY'=>'S',
	'LBL_SEND_BUTTON_LABEL'=>'送信',
	'LBL_SEND_BUTTON_TITLE'=>'送信[Alt+S]',
	'LBL_SEND'=>'送信',
	'LBL_SENT_MODULE_NAME'=>'送信済み電子メール',
	'LBL_SHOW_ALT_TEXT'=>'代替テキストの表示',
	'LBL_SIGNATURE'=>'シグニチャ',
	'LBL_SUBJECT'=>'件名:',
	'LBL_TEXT_BODY'=>'テキストボディ',
	'LBL_TIME'=>'送信時間:',
	'LBL_TO_ADDRS'=>'To',
	'LBL_USE_TEMPLATE'=>'テンプレートの利用:',
	'LBL_USERS_SUBPANEL_TITLE'=>'ユーザ',
	'LBL_USERS'=>'ユーザ',
	'LNK_ALL_EMAIL_LIST'=>'電子メール',
	'LNK_ARCHIVED_EMAIL_LIST'=>'電子メール',
	'LNK_CALL_LIST'=>'コール',
	'LNK_DRAFTS_EMAIL_LIST'=>'ドラフト',
	'LNK_EMAIL_LIST'=>'電子メール',
	'LBL_EMAIL_RELATE'=>'関連先',
	'LNK_EMAIL_TEMPLATE_LIST'=>'電子メールテンプレート',
	'LNK_MEETING_LIST'=>'ミーティング',
	'LNK_NEW_ARCHIVE_EMAIL'=>'電子メール作成・保存',
	'LNK_NEW_CALL'=>'コール作成',
	'LNK_NEW_EMAIL_TEMPLATE'=>'電子メールテンプレート作成',
	'LNK_NEW_EMAIL'=>'電子メール作成・保存',
	'LNK_NEW_MEETING'=>'ミーティング作成',
	'LNK_NEW_NOTE'=>'ノート作成',
	'LNK_NEW_SEND_EMAIL'=>'電子メール作成',
	'LNK_NEW_TASK'=>'タスク作成',
	'LNK_NOTE_LIST'=>'ノート',
	'LNK_SENT_EMAIL_LIST'=>'送信済み電子メール',
	'LNK_TASK_LIST'=>'タスク',
	'LNK_VIEW_CALENDAR'=>'今日',
	'LBL_LIST_ASSIGNED'=>'アサイン済み',
	'LBL_LIST_CONTACT_NAME'=>'取引先担当者',
	'LBL_LIST_CREATED'=>'作成日',
	'LBL_LIST_DATE_SENT'=>'送信日',
	'LBL_LIST_DATE'=>'送信日',
	'LBL_LIST_FORM_DRAFTS_TITLE'=>'ドラフト',
	'LBL_LIST_FORM_SENT_TITLE'=>'送信済み電子メール',
	'LBL_LIST_FORM_TITLE'=>'電子メール一覧',
	'LBL_LIST_FROM_ADDR'=>'From',
	'LBL_LIST_RELATED_TO'=>'関連先',
	'LBL_LIST_SUBJECT'=>'件名',
	'LBL_LIST_TIME'=>'送信時間',
	'LBL_LIST_TO_ADDR'=>'To',
	'LBL_LIST_TYPE'=>'タイプ',
	'NTC_REMOVE_INVITEE'=>'本当にこの受信者を削除して良いですか？',
	'WARNING_SETTINGS_NOT_CONF'=>'注: 電子メールを送信するための設定がされていません。',
	'WARNING_NO_UPLOAD_DIR'=>'ファイルの添付ができません: upload_tmp_dirが設定されていません。php.iniの設定を確認してください。',
	'WARNING_UPLOAD_DIR_NOT_WRITABLE'=>'ファイルの添付ができません: upload_tmp_dirの値が不正です。php.iniの設定を確認してください。',
	'LBL_BUTTON_RAW_TITLE'=>'元のメッセージを表示[Alt+E]',
	'LBL_BUTTON_RAW_KEY'=>'e',
	'LBL_BUTTON_RAW_LABEL'=>'元データ表示',
	'LBL_BUTTON_RAW_LABEL_HIDE'=>'元データ非表示',
	'LBL_BUTTON_CHECK'=>'電子メール確認',
	'LBL_BUTTON_CHECK_TITLE'=>'新規メールをチェック',
	'LBL_BUTTON_CHECK_KEY'=>'c',
	'LBL_BUTTON_FORWARD'=>'転送',
	'LBL_BUTTON_FORWARD_TITLE'=>'このメールを転送[Alt+F]',
	'LBL_BUTTON_FORWARD_KEY'=>'f',
	'LBL_BUTTON_REPLY_KEY'=>'r',
	'LBL_BUTTON_REPLY_TITLE'=>'返信[Alt+R]',
	'LBL_BUTTON_REPLY'=>'返信',
	'LBL_CASES_SUBPANEL_TITLE'=>'ケース',
	'LBL_INBOUND_TITLE'=>'インバウンドメール',
	'LBL_INTENT'=>'目的',
	'LBL_MESSAGE_ID'=>'メッセージID',
	'LBL_REPLY_HEADER_1'=>'以下の日- ',
	'LBL_REPLY_HEADER_2'=>'さんは書きました:',
	'LBL_REPLY_TO_ADDRESS'=>'Reply-toアドレス',
	'LBL_REPLY_TO_NAME'=>'Reply-to名',
	'LBL_LIST_BUG'=>'バグトラッカー',
	'LBL_LIST_CASE'=>'ケース',
	'LBL_LIST_CONTACT'=>'取引先担当者',
	'LBL_LIST_LEAD'=>'リード',
	'LBL_LIST_TASK'=>'タスク',
	'LBL_LIST_ASSIGNED_TO_NAME'=>'アサイン先ユーザ',
	'LBL_ALL'=>'すべての',
	'LBL_ASSIGN_WARN'=>'2つのオプションがすべて選択されていることを確認してください。',
	'LBL_BACK_TO_GROUP'=>'グループ受信箱へ戻る',
	'LBL_BUTTON_DISTRIBUTE_KEY'=>'a',
	'LBL_BUTTON_DISTRIBUTE_TITLE'=>'アサイン[Alt+A]',
	'LBL_BUTTON_DISTRIBUTE'=>'アサイン',
	'LBL_BUTTON_GRAB_KEY'=>'t',
	'LBL_BUTTON_GRAB_TITLE'=>'グループから取る[Alt+T]',
	'LBL_BUTTON_GRAB'=>'グループから取る',
	'LBL_CREATE_BUG'=>'不具合作成',
	'LBL_CREATE_CASE'=>'ケース作成',
	'LBL_CREATE_CONTACT'=>'取引先担当者作成',
	'LBL_CREATE_LEAD'=>'リード作成',
	'LBL_CREATE_TASK'=>'タスク作成',
	'LBL_DIST_TITLE'=>'アサイメント',
	'LBL_LOCK_FAIL_DESC'=>'選択されたアイテムは利用不可能です。',
	'LBL_LOCK_FAIL_USER'=>'は所有権を持ちました。',
	'LBL_MASS_DELETE_ERROR'=>'チェックされたアイテムはどれも削除されませんでした。',
	'LBL_NEW'=>'新規',
	'LBL_NEXT_EMAIL'=>'次のフリーアイテム',
	'LBL_NO_GRAB_DESC'=>'利用可能なアイテムがありません。後で再試行してください。',
	'LBL_QUICK_REPLY'=>'返信',
	'LBL_REPLIED'=>'返信済み',
	'LBL_SELECT_TEAM'=>'チーム選択',
	'LBL_TAKE_ONE_TITLE'=>'担当',
	'LBL_TITLE_SEARCH_RESULTS'=>'検索結果',
	'LBL_TO'=>'To: ',
	'LBL_TOGGLE_ALL'=>'すべて選択',
	'LBL_UNKNOWN'=>'未知',
	'LBL_UNREAD_HOME'=>'未読メール',
	'LBL_UNREAD'=>'未読',
	'LBL_USE_ALL'=>'すべての検索結果',
	'LBL_USE_CHECKED'=>'チェックされたもののみ',
	'LBL_USE_MAILBOX_INFO'=>'受信箱のアドレスを使用',
	'LBL_USE'=>'アサイン:',
	'LBL_ASSIGN_SELECTED_RESULTS_TO'=>'選択された結果のアサイン先: ',
	'LBL_USER_SELECT'=>'ユーザ選択',
	'LBL_USING_RULES'=>'利用するルール:',
	'LBL_WARN_NO_DIST'=>'配布方法が選択されていません',
	'LBL_WARN_NO_USERS'=>'ユーザが選択されていません',
	'LBL_WARN_NO_USERS_OR_TEAM'=>'Please select either a user or team for assignment.',
	'LBL_IMPORT_STATUS_TITLE'=>'Status',
	'LBL_LIST_STATUS'=>'ステータス',
	'LBL_LIST_TITLE_GROUP_INBOX'=>'グループ受信箱',
	'LBL_LIST_TITLE_MY_DRAFTS'=>'ドラフト',
	'LBL_LIST_TITLE_MY_INBOX'=>'私の受信箱',
	'LBL_LIST_TITLE_MY_SENT'=>'私の送信済みメール',
	'LBL_LIST_TITLE_MY_ARCHIVES'=>'保存メール',
	'LBL_ACTIVITIES_REPORTS'=>'Activities Report',
	'LNK_CHECK_MY_INBOX'=>'私のメールをチェック',
	'LNK_DATE_SENT'=>'送信日',
	'LNK_GROUP_INBOX'=>'グループ受信箱',
	'LNK_MY_DRAFTS'=>'ドラフト',
	'LNK_MY_INBOX'=>'私のメール',
	'LNK_VIEW_MY_INBOX'=>'View My Email',
	'LNK_QUICK_REPLY'=>'返信',
	'LNK_MY_ARCHIVED_LIST'=>'保存メール',
	'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED'=>'No Primary Team specified',
	'LBL_ASSIGNED_TO'=>'アサイン先:',
	'LBL_MEMBER_OF'=>'上位',
	'LBL_QUICK_CREATE'=>'クイック作成',
	'LBL_STATUS'=>'電子メールステータス:',
	'LBL_EMAIL_FLAGGED'=>'フラグ:',
	'LBL_EMAIL_REPLY_TO_STATUS'=>'Reply To ステータス:',
	'LBL_TYPE'=>'タイプ:',
	'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE'=>'確認',
	'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG'=>'入力した内容が失われてしまいますが、指定したテンプレートを適用しますか?',
	'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG'=>'Selecting \"--None--\" will clear any data already entered within the email body. Do you wish to continue?',
	'LBL_CHECK_ATTACHMENTS'=>'添付ファイルをチェックしてください!',
	'LBL_HAS_ATTACHMENTS'=>'この電子メールはすでに添付ファイルがあります。添付ファイルを保持しますか？',
	'ERR_MISSING_REQUIRED_FIELDS'=>'Missing required field',
	'ERR_INVALID_REQUIRED_FIELDS'=>'Invalid required field',
	'LBL_FILTER_BY_RELATED_BEAN'=>'Only show recipients related to',
	'LBL_RECIPIENTS_HAVE_BEEN_ADDED'=>'Recipients have been added.',
	'LBL_ADD_INBOUND_ACCOUNT'=>'Add',
	'LBL_ADD_OUTBOUND_ACCOUNT'=>'Add',
	'LBL_EMAIL_ACCOUNTS_INBOUND'=>'Mail Account Properties',
	'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT'=>'Outgoing SMTP Mail Server',
	'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS'=>'Outgoing SMTP Mail Servers',
	'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS'=>'Mail Accounts',
	'LBL_EMAIL_SETTINGS_INBOUND'=>'Incoming Email',
	'LBL_EMAIL_SETTINGS_OUTBOUND'=>'Outgoing Email',
	'LBL_ADD_CC'=>'Add Cc',
	'LBL_ADD_BCC'=>'Add Bcc',
	'LBL_ADD_TO_ADDR'=>'Add To',
	'LBL_SELECTED_ADDR'=>'Selected',
	'LBL_ADD_CC_BCC_SEP'=>'|',
	'LBL_SEND_EMAIL_FAIL_TITLE'=>'メッセージは送信できません。',
	'LBL_EMAIL_DETAIL_VIEW_SHOW'=>'show ',
	'LBL_EMAIL_DETAIL_VIEW_MORE'=>' more',
	'LBL_MORE_OPTIONS'=>'More',
	'LBL_LESS_OPTIONS'=>'Less',
	'LBL_MAILBOX_TYPE_PERSONAL'=>'Personal',
	'LBL_MAILBOX_TYPE_GROUP'=>'Group',
	'LBL_MAILBOX_TYPE_GROUP_FOLDER'=>'Group - Auto-Import',
	'LBL_SEARCH_FOR'=>'Search For',
	'LBL_EMAIL_INBOUND_TYPE_HELP'=>'<b>Personal</b>: Email account accessible by you. Only you can manage and import emails from this account.<br><b>Group</b>: Email account accessible by members of specified teams. Team members can manage and import emails from this account.<br><b>Group - auto-import</b>: Email account accessible by members of specified teams. Emails are automatically imported as records.',
	'LBL_ADDRESS_BOOK_SEARCH_HELP'=>'Enter an email address, First Name, Last Name or Account Name to find recipients.',
	'LBL_TEST_SETTINGS'=>'Test Settings',
	'LBL_EMPTY_EMAIL_BODY'=>'<p><span style=\"color: #888888;\"><em>This Message Has No Content</em></span></p>',
	'LBL_TEST_EMAIL_SUBJECT'=>'Test Email from Sugar',
	'LBL_NO_SUBJECT'=>'(no subject)',
	'LBL_CHECKING_ACCOUNT'=>'Checking Account',
	'LBL_OF'=>'of',
	'LBL_TEST_EMAIL_BODY'=>'This email was sent in order to test the outgoing mail server information provided in the Sugar application.  A successful receipt of this email indicates that the outgoing mail server information provided is valid.',
	'LBL_MAIL_SMTPUSER'=>'SMTP Username:',
	'LBL_MAIL_SMTPPASS'=>'SMTP Password:',
	'LBL_MAIL_SMTPSERVER'=>'SMTP Server:',
	'LBL_SMTP_SERVER_HELP'=>'This SMTP Mail Server can be used for outgoing mail. Provide a username and password for your email account in order to use the mail server.',
	'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS'=>'The administator has not yet configured the default outbound account.  Unable to send test email.',
	'LBL_MAIL_SMTPAUTH_REQ'=>'Use SMTP Authentication?',
	'LBL_MAIL_SMTPPORT'=>'SMTP Port:',
	'LBL_MAIL_SMTPTYPE'=>'SMTP Server Type:',
	'LBL_MAIL_SMTP_SETTINGS'=>'SMTP Server Specification',
	'LBL_CHOOSE_EMAIL_PROVIDER'=>'Choose your Email provider:',
	'LBL_YAHOOMAIL_SMTPPASS'=>'Yahoo! Mail Password:',
	'LBL_YAHOOMAIL_SMTPUSER'=>'Yahoo! Mail ID:',
	'LBL_GMAIL_SMTPPASS'=>'Gmail Password:',
	'LBL_GMAIL_SMTPUSER'=>'Gmail Email Address:',
	'LBL_EXCHANGE_SMTPPASS'=>'Exchange Password:',
	'LBL_EXCHANGE_SMTPUSER'=>'Exchange Username:',
	'LBL_EXCHANGE_SMTPPORT'=>'Exchange Server Port:',
	'LBL_EXCHANGE_SMTPSERVER'=>'Exchange Server:',
);