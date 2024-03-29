<?php 

// constants.php
// Old toolkit constants plus a few new ones

define('CW_VERSION', '1.2.4');
define('CW_DOWNLOAD_SITE', 'http://www.youngiprofessionals.com/wiki/XMLSERVICE');
define('CW_PERSISTENT', 'persistent');
define('CW_EXISTING_TRANSPORT_CONN', 'existingTransportConn'); // such as a database connection
define('CW_EXISTING_TRANSPORT_I5_NAMING','existingTransportI5Naming' ); // naming mode of the transport (true/false)
// transport types can be passed into i5_connect in options array. 
define('CW_TRANSPORT_TYPE', 'transportType' ); // ibm_db2 is default transport. odbc can be used as well)

define('I5_OPEN_READ', '1');
define('I5_OPEN_READWRITE', '5');
define('I5_OPEN_COMMIT', '32');
define('I5_OPEN_SHRRD', '16384');
define('I5_OPEN_SHRUPD', '32768');
define('I5_OPEN_SHRNUPD', '65536');
define('I5_OPEN_EXCLRD', '131072');
define('I5_OPEN_EXCL', '262144');
define('I5_READ_NEXT', '33554432');
define('I5_READ_PREV', '50331648');
define('I5_READ_FIRST', '67108864');
define('I5_READ_LAST', '83886080');
define('I5_EQ', '100663296');
define('I5_GT', '117440512');
define('I5_GE', '134217728');
define('I5_LT', '150994944');
define('I5_LE', '167772160');
define('I5_FIRST', '67108864');
define('I5_LAST', '83886080');
define('I5_READ_SEEK', '4');
define('I5_READ_SAME', '16777216');
define('I5_READ_KEYNEXTEQ', '184549376');
define('I5_READ_KEYPREVEQ', '201326592');
define('I5_READ_KEYNEXTUNQ', '218103808');
define('I5_READ_KEYPREVUNQ', '234881024');
define('I5_EDIT_ONE', '4');
define('I5_EDIT_ALWAYS', '8');
define('I5_EDIT_AUTO', '16');
define('I5_ISOLEVEL_NONE', '0');
define('I5_ISOLEVEL_CHG', '1');
define('I5_ISOLEVEL_CS', '2');
define('I5_ISOLEVEL_ALL', '3');
define('I5_ISOLEVEL_CHGALWAYS', '4');
define('I5_ADDNEW_CLEAR', '1');
define('I5_ADDNEW_NOCLEAR', '2');
define('I5_ACTUAL_SIZE', '-1');
define('I5_CURSOR_SENSITIVITY', '24');
define('I5_NEW_CONNECTION', '2');
define('I5_PRIVATE_CONNECTION', '3');
define('I5_SSL_ACTIVE', '4');
define('I5_SSL_INTERFACE_OPENSSL', '1');
define('I5_SSL_INTERFACE_WINDOWS', '2');
define('I5_SQL_UNSPECIFIED', '0');
define('I5_SQL_INSENSITIVE', '1');
define('I5_SQL_SENSITIVE', '2');
define('I5_CAT_NULL', '0');
define('I5_CAT_SQL', '1');
define('I5_CAT_SIGNAL', '2');
define('I5_CAT_MULTIREC', '3');
define('I5_CAT_APPC', '4');
define('I5_CAT_INTERNAL', '5');
define('I5_CAT_TCPIP', '6');
define('I5_CAT_UNKNOWN', '7');
define('I5_CAT_VBA', '8');
define('I5_CAT_PHP', '9');
define('I5_CAT_DELPHI_PHP', '9');
define('I5_OPTIONS_JOBNAME', '1');
define('I5_OPTIONS_SQLNAMING', '2');
define('I5_OPTIONS_DECIMALPOINT', '3');
define('I5_OPTIONS_CODEPAGEFILE', '4');
define('I5_OPTIONS_EACUNLOCK', '5');
define('I5_OPTIONS_INITLIBL', '6');
define('I5_OPTIONS_PGMNAME', '16');
define('I5_OPTIONS_LOCALCP', '17');
define('I5_OPTIONS_RMTCCSID', '21');
define('I5_OPTIONS_IDLE_TIMEOUT', '18');
define('I5_OPTIONS_ALIAS', '7');
define('I5_OPTIONS_PRIVATE_CONNECTION', '19');
define('I5_OPTIONS_ATOMATIC_NEXT_RESULT', '20');
define('I5_OPTIONS_AUTOMATIC_NEXT_RESULT', '20');
define('I5_OPTIONS_SSL_MODE', '22');
define('I5_OPTIONS_SSL_INTF', '23');
define('I5_OPTIONS_SSL_CAFILE', '24');
define('I5_OPTIONS_SSL_CAPATH', '25');
define('I5_OPTIONS_SSL_USER_CERT_FILE', '26');
define('I5_OPTIONS_SSL_USER_CERT_PKEY_FILE', '27');
define('I5_OPTIONS_SSL_USER_CERT_PASSPHRASE', '28');
define('I5_OPTIONS_SSL_TRUE', '1');
define('I5_OPTIONS_SSL_FALSE', '0');
define('I5_OPTIONS_SSL_MANDATORY', '3');
define('I5_OPTIONS_USER', '8');
define('I5_OPTIONS_OUTQ', '9');
define('I5_OPTIONS_FORMTYPE', '10');
define('I5_OPTIONS_COPIES', '11');
define('I5_OPTIONS_HOLD', '12');
define('I5_OPTIONS_SAVE', '13');
define('I5_OPTIONS_OUTPTY', '14');
define('I5_OPTIONS_USRDTA', '15');
define('I5_ERR_OK', '0');
define('I5_ERR_ERROR', '1');
define('I5_ERR_TOOMUCHOPENFILE', '2');
define('I5_ERR_MEMALLOC', '3');
define('I5_ERR_INVALIDPTR', '4');
define('I5_ERR_FIELDNOTFOUND', '6');
define('I5_ERR_INVALIDFIELDNBR', '7');
define('I5_ERR_INVALIDKEYLEN', '8');
define('I5_ERR_INVALIDKEYNBR', '9');
define('I5_ERR_NOTENABLETOUPDATE', '10');
define('I5_ERR_INVALIDOPENMODE', '11');
define('I5_ERR_RECORDNOTFOUND', '12');
define('I5_ERR_RECORDLOCKED', '13');
define('I5_ERR_BEOF', '14');
define('I5_ERR_FILELIMITS', '15');
define('I5_ERR_NOTCONNECTED', '16');
define('I5_ERR_INVALIDSEQ', '17');
define('I5_ERR_NORANGESET', '18');
define('I5_ERR_NOLINKDEFINED', '19');
define('I5_ERR_NOCURRENTRECORD', '20');
define('I5_ERR_NULLNOTALLOWED', '21');
define('I5_ERR_BADSESSION', '22');
define('I5_ERR_WRONGLOGIN', '23');
define('I5_ERR_NOTENOUGHRIGHTS', '24');
define('I5_ERR_FIELDNULL', '4097');
define('I5_ERR_INVALIDTYPE', '25');
define('I5_ERR_INVALIDINFO', '26');
define('I5_ERR_NOTTYPEPROPERTY', '27');
define('I5_ERR_RECORDCHANGED', '28');
define('I5_ERR_ALLREADYINTRAN', '29');
define('I5_ERR_NOTINTRAN', '30');
define('I5_ERR_DESC_UNEXP', '39');
define('I5_ERR_DQDESC_UNSUPP', '40');
define('I5_ERR_PARSEXML', '42');
define('I5_ERR_PGM_DONT_EXIST', '530');
define('I5_ERR_PHP_HDLDFT', '256');
define('I5_ERR_PHP_HDLCONN', '257');
define('I5_ERR_PHP_HDLBAD', '258');
define('I5_ERR_PHP_OPTIONSTYPE', '259');
define('I5_ERR_PHP_OPTIONSNUMBER', '260');
define('I5_ERR_PHP_RESOURCE_BAD', '261');
define('I5_ERR_PHP_TYPEPARAM', '262');
define('I5_ERR_PHP_NBPARAM_BAD', '263');
define('I5_ERR_PHP_TYPEGET', '264');
define('I5_ERR_PHP_OPERATOR_BAD', '265');
define('I5_ERR_PHP_BOOKMARK', '272');
define('I5_ERR_PHP_NOT_BOOKMARK', '273');
define('I5_ERR_PHP_CALL_BINDPARAM', '274');
define('I5_ERR_PHP_GETPARAM', '275');
define('I5_ERR_PHP_BINDPARAM', '276');
define('I5_ERR_PHP_PARAM_DESC', '277');
define('I5_ERR_PHP_BLOBSIZE', '278');
define('I5_ERR_PHP_VARIABLE', '281');
define('I5_ERR_PHP_INTERNAL', '288');
define('I5_ERR_PHP_EXECUTE', '289');
define('I5_ERR_PHP_NO_COMMAND', '290');
define('I5_ERR_PHP_EMPTY_ARRAY', '291');
define('I5_ERR_PHP_NO_KEYNAME', '292');
define('I5_ERR_PHP_NO_PARMNAME', '293');
define('I5_ERR_PHP_NO_ZVALUE', '294');
define('I5_ERR_PHP_COMMAND_ERROR', '295');
define('I5_ERR_PHP_DATAREA_READ', '296');
define('I5_ERR_PHP_GET_SYSVAL', '297');
define('I5_ERR_PHP_ELEMENT_MISSING', '304');
define('I5_ERR_PHP_BAD_DEF', '305');
define('I5_ERR_PHP_BAD_KEYNAME', '306');
define('I5_ERR_PHP_NO_DS_VALUE', '307');
define('I5_ERR_PARAMNOTFOUND', '37');
define('I5_ERR_ENDOFOCC', '38');
define('I5_ERR_PHP_BAD_DS_INPUT', '308');
define('I5_ERR_DESC_WRONG_DATAOP', '41');
define('I5_ERR_INCORRECTVALUE', '36');
define('I5_ERR_PHP_BAD_PROG_NAME', '311');
define('I5_ERR_PHP_AS400_MESSAGE', '312');
define('I5_ERR_PHP_NOT_DTAQ_KEY', '313');
define('I5_ERR_PHP_DTAQ_BADKEY', '309');
define('I5_ERR_PHP_DESC_EMPTY', '310');
define('I5_ERR_PHP_BAD_LEN_PROP', '266');
define('I5_ERR_PHP_LIST_PROP', '267');
define('I5_ERR_PHP_SPOOL_FILE_FOPEN', '269');
define('I5_ERR_PHP_API_LENGTH', '270');
define('I5_ERR_PHP_EMPTY_PCML', '316');
define('I5_ERR_PHP_BAD_TYPE_KEYNAME', '271');
define('I5_ERR_PHP_BAD_ADDNEW_CST', '282');
define('I5_ERR_PHP_PROPERTY_NUMBER', '280');
define('I5_ERR_PHP_ALREADY_PGMNAME', '284');
define('I5_ERR_PHP_NOT_RPIVATE_CONNECTION', '283');
define('I5_ERR_PHP_PRIVATE_CONNECTION_NOT_FOUND', '285');
define('I5_ERR_PHP_EMPTY_NAME', '314');
define('I5_ERR_PHP_BAD_DTAARA_LENGTH', '315');
define('I5_ERR_PHP_UNAVIABLE_PASE', '298');
define('I5_ERR_PHP_LOCALHOST_NOT_PERMIT', '286');
define('I5_ERR_PHP_SEEK_FIRSTLAST', '279');
define('I5_TYPE_SHORT', 1); // I5_TYPE constants are numeric (not string)
define('I5_TYPE_LONG', 2);
define('I5_TYPE_INT', 2);
define('I5_TYPE_FLOAT', 3);
define('I5_TYPE_DOUBLE', 4);
define('I5_TYPE_BIN', 5);
define('I5_TYPE_PACKED', 6);
define('I5_TYPE_ZONED', 7);
define('I5_TYPE_DATE', 8);
define('I5_TYPE_TIME', 9);
define('I5_TYPE_TIMESTP', 10);
define('I5_TYPE_DBCS', 11);
define('I5_TYPE_LONG8', 13); // 8 bytes, 64-bit. doesn't exist in PHP. convert to a char? like a bigint in sql
define('I5_TYPE_NUMERICCHAR', 14);
define('I5_TYPE_BLOB', 15);
define('I5_TYPE_CLOB', 16);
define('I5_TYPE_UNICODE', 17);
define('I5_TYPE_VARCHAR', 19);
define('I5_TYPE_CHAR', 0);
define('I5_TYPE_BYTE', 5);
define('I5_TYPE_STRUCT', 256);
define('I5_TYPE_VARBIN', 20);
define('I5_CURLIB', '*CURLIB');
define('I5_ALL_OBJECTS', '*ALL');
define('I5_ALL_NAMES', '*');
define('I5_JOBLOG_NEXT', '*NEXT ');
define('I5_JOBLOG_PREV', '*PREV ');
define('I5_NAME', 'name');
define('I5_INITSIZE', 'initSize');
define('I5_DESCRIPTION', 'description');
define('I5_INIT_VALUE', 'initvalue');
define('I5_EXTEND_ATTRIBUT', 'extAttr');
define('I5_AUTHORITY', 'authority');
define('I5_LIBNAME', 'libName');
define('I5_JOBNAME', 'jobName');
define('I5_USERNAME', 'username');
define('I5_JOBNUMBER', 'jobnumber');
define('I5_MAXMESSAGE', 'maxMessage');
define('I5_DIRECTION', 'direction');
define('I5_USERDATA', 'userdata');
define('I5_OUTQ', 'outq');
define('I5_STATUS', 'status');
define('I5_JOBTYPE', 'jobType');
define('I5_IN', '1');
define('I5_OUT', '2');
define('I5_INOUT', '3');
define('I5_BYVAL', '8');
define('I5_RETVAL', '4');
define('I5_DTAQ_OPTION_GT', '1');
define('I5_DTAQ_OPTION_LT', '2');
define('I5_DTAQ_OPTION_NE', '3');
define('I5_DTAQ_OPTION_EQ', '4');
define('I5_DTAQ_OPTION_GE', '5');
define('I5_DTAQ_OPTION_LE', '6');
define('I5_BK', '1');
define('I5_JOB_NAME', '1');
define('I5_JOB_USER_NAME', '2');
define('I5_JOB_NUMBER', '3');
define('I5_JOB_INTERNAL_ID', '4');
define('I5_JOB_STATUS', '5');
define('I5_JOB_TYPE', '6');
define('I5_JOB_SUBTYPE', '7');
define('I5_JOB_INFO_STATUS', '8');
define('I5_JOB_ACT_JOB_STS', '101');
define('I5_JOB_ALW_MULTI_THREADS', '102');
define('I5_JOB_ACT_ENDJOB_STS', '103');
define('I5_JOB_BRKMSG', '201');
define('I5_JOB_CANCEL_KEY', '301');
define('I5_JOB_CCSID', '302');
define('I5_JOB_CNTRYID', '303');
define('I5_JOB_CPU_TIME', '304');
define('I5_JOB_USRPRF', '305'); // current user profile for job
define('I5_JOB_COMPLETION_STS', '306');
define('I5_JOB_POOL_ID', '307');
define('I5_JOB_CHAR_ID_CTRL', '311');
define('I5_JOB_PROCESS_UNIT_TIME', '312');
define('I5_JOB_PROCESS_UNIT_TIME_DB', '313');
define('I5_JOB_DATETIME_ACTIVE', '401');
define('I5_JOB_DATETIME_IN', '402');
define('I5_JOB_DATETIME_SCHED', '403');
define('I5_JOB_DATETIME_JOBQ', '404');
define('I5_JOB_DATFMT', '405');
define('I5_JOB_DATSEP', '406');
define('I5_JOB_DBCS_CAP', '407');
define('I5_JOB_DDM_HANDLE', '408');
define('I5_JOB_DFTWAIT', '409');
define('I5_JOB_DEVRCYACN', '410');
define('I5_JOB_DEVNAME', '411');
define('I5_JOB_DFTCCSID', '412');
define('I5_JOB_DECFMT', '413');
define('I5_JOB_DATETIME_END', '418');
define('I5_JOB_ENDSEV', '501');
define('I5_JOB_ENDSTS', '502');
define('I5_JOB_EXITKEY', '503');
define('I5_JOB_FUNC_NAME', '601');
define('I5_JOB_FUNC_TYPE', '602');
define('I5_JOB_SIGNED_JOB', '701');
define('I5_JOB_GRPPRFNAME', '702');
define('I5_JOB_GRPPRFNAME_SUP', '703');
define('I5_JOB_INQMSGRPLY', '901');
define('I5_JOB_ACCOUNT_CODE', '1001');
define('I5_JOB_DATE', '1002');
define('I5_JOB_DESC_NAME', '1003');
define('I5_JOB_QUEUE_NAME', '1004');
define('I5_JOB_QUEUE_PTY', '1005');
define('I5_JOB_SWITCHES', '1006');
define('I5_JOB_JOBMSGQFL', '1007');
define('I5_JOB_JOBMSGQ_SIZE', '1008');
define('I5_JOB_USRID', '1012');
define('I5_JOB_USRID_SETTING', '1013');
define('I5_JOB_END_REASON', '1014');
define('I5_JOB_LOG_PENDING', '1015');
define('I5_JOB_TYPE_ENHANCED', '1016');
define('I5_JOB_LANGID', '1201');
define('I5_JOB_LOGLVL', '1202');
define('I5_JOB_LOGCLPGM', '1203');
define('I5_JOB_LOGSEV', '1204');
define('I5_JOB_LOGTEXT', '1205');
define('I5_JOB_MODE_NAME', '1301');
define('I5_JOB_MAX_PROC_UNIT_TIME', '1302');
define('I5_JOB_MAX_TMP_STG_K', '1303');
define('I5_JOB_MAX_THREADS', '1304');
define('I5_JOB_MAX__STG_M', '1305');
define('I5_JOB_MEM_POOL_NAME', '1306');
define('I5_JOB_MSGRPL', '1307');
define('I5_JOB_INTERACTIVE_TRS', '1402');
define('I5_JOB_DB_LCKWAIT', '1403');
define('I5_JOB_ MCH_LCKW', '1404');
define('I5_JOB_NONDB_LCKW', '1405');
define('I5_JOB_AUX_IOREQ', '1406');
define('I5_JOB_OUTQ_NAME', '1501');
define('I5_JOB_OUTQ_PTY', '1502');
define('I5_JOB_PRTTEXT', '1602');
define('I5_JOB_PRTDEVNAME', '1603');
define('I5_JOB_PURGE', '1604');
define('I5_JOB_PRD_RETCODE', '1605');
define('I5_JOB_PROG_RETCODE', '1606');
define('I5_JOB_PENDING_SGNSET', '1607');
define('I5_JOB_PROCESS_ID', '1608');
define('I5_JOB_RESPONSE_TIME', '1801');
define('I5_JOB_RUNPTY', '1802');
define('I5_JOB_ROUTING_DATA', '1803');
define('I5_JOB_STRSEQ', '1901');
define('I5_JOB_STS_MSGHDL', '1902');
define('I5_JOB_STS_JOBQ', '1903');
define('I5_JOB_SBMJOB', '1904');
define('I5_JOB_SBMMSGQ', '1905');
define('I5_JOB_SBSD', '1906');
define('I5_JOB_SYSPOOLID', '1907');
define('I5_JOB_SPCLENV', '1908');
define('I5_JOB_SGNBLK_MASK', '1909');
define('I5_JOB_SGNSTS', '1910');
define('I5_JOB_SVRTYPE', '1911');
define('I5_JOB_SPLFILE_ACTION', '1982');
define('I5_JOB_TIMSEP', '2001');
define('I5_JOB_TIMESLICE', '2002');
define('I5_JOB_TIMESLICE_END', '2003');
define('I5_JOB_TMPSTGK', '2004');
define('I5_JOB_TIME_DB_LCKW', '2005');
define('I5_JOB_TIME_MCH_LCKW', '2006');
define('I5_JOB_TIME_NONDB_LCKW', '2007');
define('I5_JOB_THREADCNT', '2008');
define('I5_LOBJ_MESSAGE_SEVERITY', '1');
define('I5_LOBJ_MESSAGE_IDENTIFIER', '2');
define('I5_LOBJ_MESSAGE_TYPE', '3');
define('I5_LOBJ_MESSAGE_FILENAME', '4');
define('I5_LOBJ_MESSAGE_FILELIBRARY', '5');
define('I5_LOBJ_DATASENT', '6');
define('I5_LOBJ_TIMESENT', '7');
define('I5_LOBJ_TIMESENT_MICRO', '8');
define('I5_LOBJ_ALERTOPT', '101');
define('I5_LOBJ_RPLDATA', '201');
define('I5_LOBJ_MSG', '301');
define('I5_LOBJ_MSGDTA', '302');
define('I5_LOBJ_MSGHLP', '401');
define('I5_LOBJ_MSGHLPDTA', '402');
define('I5_LOBJ_MSGHLPDTAFMT', '404');
define('I5_LOBJ_DFTRPLY', '501');
define('I5_LOBJ_SNDNAME', '601');
define('I5_LOBJ_SNDTYPE', '602');
define('I5_LOBJ_SNDPGM', '603');
define('I5_LOBJ_SNDMOD', '604');
define('I5_LOBJ_SNDPROC', '605');
define('I5_LOBJ_RCVTYPE', '702');
define('I5_LOBJ_RCVPROG', '703');
define('I5_LOBJ_RCVMOD', '704');
define('I5_LOBJ_RCVPROC', '705');
define('I5_LOBJ_MSGFILE', '801');
define('I5_LOBJ_PROBLEMID', '901');
define('I5_LOBJ_RPLYSTS', '1001');
define('I5_LOBJ_RQSSTS', '1101');
define('I5_LOBJ_RQSLVL', '1201');
define('I5_LOBJ_TXTCCSID', '1301');
define('I5_LOBJ_DATACCSID', '1303');

// additional constants that weren't defined by old toolkit but its error numbers were
define('I5_CONN_TIMEOUT', '78');