<?php
/**
 * Internationalisation file for extension AbuseFilter.
 *
 * @addtogroup Extensions
 */

$messages = array();

/** English
 * @author Andrew Garrett
 */
$messages['en'] = array(
	// Description message
	'abusefilter-desc' => 'Applies automatic heuristics to edits.',

	// Special pages
	'abusefilter' => 'Abuse filter configuration',
	'abuselog' => 'Abuse log',
	
	// Hooks
	'abusefilter-warning' => "<big>'''Warning'''</big>: This action has been automatically identified as harmful.
Unconstructive edits will be quickly reverted,
and egregious or repeated unconstructive editing will result in your account or computer being blocked.
If you believe this edit to be constructive, you may click Submit again to confirm it.
A brief description of the abuse rule which your action matched is: $1",
	'abusefilter-disallowed' => "This action has been automatically identified as harmful,
and therefore disallowed.
If you believe your edit was constructive, please contact an administrator, and inform them of what you were trying to do.
A brief description of the abuse rule which your action matched is: $1",
	'abusefilter-blocked-display' => "This action has been automatically identified as harmful,
and you have been prevented from executing it.
In addition, to protect {{SITENAME}}, your user account and all associated IP addresses have been blocked from editing.
If this has occurred in error, please contact an administrator.
A brief description of the abuse rule which your action matched is: $1",
	'abusefilter-degrouped' => "This action has been automatically identified as harmful.
Consequently, it has been disallowed, and, since your account is suspected of being compromised, all rights have been revoked.
If you believe this to have been in error, please contact a bureaucrat with an explanation of this action, and your rights may be restored.
A brief description of the abuse rule which your action matched is: $1",
	'abusefilter-autopromote-blocked' => "This action has been automatically identified as harmful, and it has been disallowed.
In addition, as a security measure, some privileges routinely granted to established accounts have been temporarily revoked from your account.
A brief description of the abuse rule which your action matched is: $1",

	'abusefilter-blocker' => 'Abuse filter',
	'abusefilter-blockreason' => 'Automatically blocked by abuse filter. Rule description: $1',
	'abusefilter-degroupreason' => 'Rights automatically stripped by abuse filter. Rule description: $1',
	
	'abusefilter-accountreserved' => 'This account name is reserved for use by the abuse filter.',
	
	// Permissions
	'right-abusefilter-modify' => 'Modify abuse filters',
	'right-abusefilter-view' => 'View abuse filters',
	'right-abusefilter-log' => 'View the abuse log',
	'right-abusefilter-log-detail' => 'View detailed abuse log entries',
	'right-abusefilter-private' => 'View private data in the abuse log',
	
	// Abuse Log
	'abusefilter-log' => 'Abuse filter log',
	'abusefilter-log-search' => 'Search the abuse log',
	'abusefilter-log-search-user' => 'User:',
	'abusefilter-log-search-filter' => 'Filter ID:',
	'abusefilter-log-search-title' => 'Title:',
	'abusefilter-log-search-submit' => 'Search',
	'abusefilter-log-entry' => '$1: $2 triggered an abuse filter, making a $3 on $4. Actions taken: $5; Filter description: $6',
	'abusefilter-log-detailedentry' => '$1: $2 triggered filter $3, making a $4 on $5. Actions taken: $6; Filter description: $7 ($8)',
	'abusefilter-log-detailslink' => 'details',
	'abusefilter-log-details-legend' => 'Details for log entry $1',
	'abusefilter-log-details-var' => 'Variable',
	'abusefilter-log-details-val' => 'Value',
	'abusefilter-log-details-vars' => 'Action parameters',
	'abusefilter-log-details-private' => 'Private data',
	'abusefilter-log-details-ip' => 'Originating IP address',
	'abusefilter-log-noactions' => 'none',
	
	// Abuse filter management
	'abusefilter-management' => 'Abuse filter management',
	'abusefilter-list' => 'All filters',
	'abusefilter-list-id' => 'Filter ID',
	'abusefilter-list-status' => 'Status',
	'abusefilter-list-public' => 'Public description',
	'abusefilter-list-consequences' => 'Consequences',
	'abusefilter-list-visibility' => 'Visibility',
	'abusefilter-list-hitcount' => 'Hit count',
	'abusefilter-list-edit' => 'Edit',
	'abusefilter-list-details' => 'Details',
	'abusefilter-hidden' => 'Private',
	'abusefilter-unhidden' => 'Public',
	'abusefilter-enabled' => 'Enabled',
	'abusefilter-disabled' => 'Disabled',
	'abusefilter-hitcount' => '$1 {{PLURAL:$1|hit|hits}}',
	'abusefilter-list-new' => 'New filter',
	'abusefilter-tools-modifiertest-submit' => 'Test',
	
	// Abuse filter tools
	'abusefilter-tools' => 'Some [[Special:AbuseFilter/tools|tools]] are available to assist in formulating and debugging abuse filters.',
	'abusefilter-tools-subtitle' => 'Tools',
	'abusefilter-tools-text' => 'Here are some tools which may be useful in formulating and debugging abuse filters. [[Special:AbuseFilter|Return to main menu]]',
	'abusefilter-tools-expr' => 'Expression tester',
	'abusefilter-tools-submitexpr' => 'Evaluate',
	
	// Abuse filter status
	'abusefilter-status' => "Of the last $1 {{PLURAL:$1|action|actions}}, $2 ($3%) {{PLURAL:$2|has|have}} reached the condition limit of $4. $5 ($6%) {{PLURAL:$5|has|have}} matched one of the filters currently enabled.",
	
	// The edit screen
	'abusefilter-edit-subtitle' => 'Editing filter $1',
	'abusefilter-edit-status-label' => 'Statistics',
	'abusefilter-edit-status' => 'Of the last $1 {{PLURAL:$1|action|actions}}, this filter has matched $2 ($3%).',
	'abusefilter-edit-throttled' => "'''Warning''': This filter was automatically disabled as a safety measure. It reached the limit of matching more than $1% of actions.",
	'abusefilter-edit-new' => 'New filter',
	'abusefilter-edit-save' => 'Save filter',
	'abusefilter-edit-id' => 'Filter ID:',
	'abusefilter-edit-description' => "Description:\n:''(publicly viewable)''",
	'abusefilter-edit-flags' => 'Flags:',
	'abusefilter-edit-enabled' => 'Enable this filter',
	'abusefilter-edit-hidden' => 'Hide details of this filter from public view',
	'abusefilter-edit-rules' => 'Conditions:',
	'abusefilter-edit-notes' => "Notes:\n:''(private)",
	'abusefilter-edit-lastmod' => 'Filter last modified:',
	'abusefilter-edit-lastuser' => 'Last user to modify this filter:',
	'abusefilter-edit-hitcount' => 'Filter hits:',
	'abusefilter-edit-consequences' => 'Actions taken on hit',
	'abusefilter-edit-action-warn' => 'Trigger these actions after giving the user a warning',
	'abusefilter-edit-action-disallow' => 'Prevent the user from performing the action in question',
	'abusefilter-edit-action-flag' => 'Flag the edit in the abuse log',
	'abusefilter-edit-action-blockautopromote' => "Revoke the user's autoconfirmed status",
	'abusefilter-edit-action-degroup' => 'Remove the user from all privileged groups',
	'abusefilter-edit-action-block' => 'Block the user and/or IP address from editing',
	'abusefilter-edit-action-throttle' => 'Trigger actions only if the user trips a rate limit',
	'abusefilter-edit-throttle-count' => 'Number of actions to allow:',
	'abusefilter-edit-throttle-period' => 'Period of time:',
	'abusefilter-edit-throttle-seconds' => '$1 seconds',
	'abusefilter-edit-throttle-groups' => "Group throttle by:\n:''(one per line, combine with commas)''",
	'abusefilter-edit-denied' => "You may not view details of this filter, because it is hidden from public view",
	'abusefilter-edit-main' => 'Filter parameters',
	'abusefilter-edit-done-subtitle' => 'Filter edited',
	'abusefilter-edit-done' => "You have successfully saved your changes to the filter.\n\n[[Special:AbuseFilter|Return]]",
	'abusefilter-edit-badsyntax' => "There is a syntax error in the filter you specified. The output from the parser was: <pre>$1</pre>",
	'abusefilter-edit-viewhistory' => "View this filter's history",
	'abusefilter-edit-history' => 'History',
	'abusefilter-edit-check' => 'Check syntax',
	
	// Filter editing helpers
	'abusefilter-edit-builder-select' => 'Select an option to add it at the cursor',
	'abusefilter-edit-builder-group-op-arithmetic' => 'Arithmetic operators',
	'abusefilter-edit-builder-op-arithmetic-addition' => 'Addition (+)',
	'abusefilter-edit-builder-op-arithmetic-subtraction' => 'Subtraction (-)',
	'abusefilter-edit-builder-op-arithmetic-multiplication' => 'Multiplication (*)',
	'abusefilter-edit-builder-op-arithmetic-divide' => 'Division (/)',
	'abusefilter-edit-builder-op-arithmetic-modulo' => 'Modulo (%)',
	'abusefilter-edit-builder-op-arithmetic-pow' => 'Power (**)',
	'abusefilter-edit-builder-group-op-comparison' => 'Comparison operators',
	'abusefilter-edit-builder-op-comparison-equal' => 'Equal to (==)',
	'abusefilter-edit-builder-op-comparison-notequal' => 'Not equal to (!=)',
	'abusefilter-edit-builder-op-comparison-lt' => 'Less than (<)',
	'abusefilter-edit-builder-op-comparison-gt' => 'Greater than (>)',
	'abusefilter-edit-builder-op-comparison-lte' => 'Less than or equal to (<=)',
	'abusefilter-edit-builder-op-comparison-gte' => 'Greater than or equal to (>=)',
	'abusefilter-edit-builder-group-op-bool' => 'Boolean operators',
	'abusefilter-edit-builder-op-bool-not' => 'Not (!)',
	'abusefilter-edit-builder-op-bool-and' => 'And (&)',
	'abusefilter-edit-builder-op-bool-or' => 'Or (|)',
	'abusefilter-edit-builder-op-bool-xor' => 'XOR (^)',
	'abusefilter-edit-builder-group-misc' => 'Miscellaneous',
	'abusefilter-edit-builder-misc-ternary' => 'Ternary operator (1 ? 2 : 3)',
	'abusefilter-edit-builder-misc-in' => 'contained in string (in)',
	'abusefilter-edit-builder-misc-like' => 'Matches regex (like)',
	'abusefilter-edit-builder-group-funcs' => 'Functions',
	'abusefilter-edit-builder-funcs-length' => 'String length (length)',
	'abusefilter-edit-builder-funcs-lcase' => 'To lower case (lcase)',
	'abusefilter-edit-builder-funcs-ccnorm' => 'Normalise confusable characters (ccnorm)',
	'abusefilter-edit-builder-funcs-rmdoubles' => 'Remove double-characters (rmdoubles)',
	'abusefilter-edit-builder-funcs-specialratio' => 'Special characters / total characters (specialratio)',
	'abusefilter-edit-builder-funcs-norm' => 'Normalise (norm)',
	'abusefilter-edit-builder-funcs-count' => 'Number of times string X appears in string Y (count)',
	'abusefilter-edit-builder-group-vars' => 'Variables',
	'abusefilter-edit-builder-vars-accountname' => 'Account name (on account creation)',
	'abusefilter-edit-builder-vars-action' => 'Action',
	'abusefilter-edit-builder-vars-addedlines' => 'Lines added in edit',
	'abusefilter-edit-builder-vars-delta' => 'Size change in edit',
	'abusefilter-edit-builder-vars-diff' => 'Unified diff of changes made by edit',
	'abusefilter-edit-builder-vars-newsize' => 'New page size',
	'abusefilter-edit-builder-vars-oldsize' => 'Old page size',
	'abusefilter-edit-builder-vars-removedlines' => 'Lines removed in edit',
	'abusefilter-edit-builder-vars-summary' => 'Edit summary/reason',
	'abusefilter-edit-builder-vars-article-id' => 'Article ID',
	'abusefilter-edit-builder-vars-article-ns' => 'Article namespace',
	'abusefilter-edit-builder-vars-article-text' => 'Article title (without namespace)',
	'abusefilter-edit-builder-vars-article-prefixedtext' => 'Full article title',
	'abusefilter-edit-builder-vars-movedfrom-id' => 'Article ID of move source page',
	'abusefilter-edit-builder-vars-movedfrom-ns' => 'Namespace of move source page',
	'abusefilter-edit-builder-vars-movedfrom-text' => 'Title of move source page',
	'abusefilter-edit-builder-vars-movedfrom-prefixedtext' => 'Full title of move source page',
	'abusefilter-edit-builder-vars-movedto-id' => 'Article ID of move destination page',
	'abusefilter-edit-builder-vars-movedto-ns' => 'Namespace of move destination page',
	'abusefilter-edit-builder-vars-movedto-text' => 'Title of move destination page',
	'abusefilter-edit-builder-vars-movedto-prefixedtext' => 'Full title of move destination page',
	'abusefilter-edit-builder-vars-user-editcount' => 'Edit count of user',
	'abusefilter-edit-builder-vars-user-age' => 'Age of user account',
	'abusefilter-edit-builder-vars-user-name' => 'Name of user account',
	'abusefilter-edit-builder-vars-user-groups' => 'Groups (including implicit) user is in',
	'abusefilter-edit-builder-vars-user-emailconfirm' => 'Time email address was confirmed',


	
	// Filter history
	'abusefilter-history' => 'History for filter $1',
	'abusefilter-history-hidden' => 'hidden',
	'abusefilter-history-enabled' => 'enabled',
	'abusefilter-history-timestamp' => 'Time',
	'abusefilter-history-user' => 'User',
	'abusefilter-history-public' => 'Public filter description',
	'abusefilter-history-flags' => 'Flags',
	'abusefilter-history-filter' => 'Filter rule',
	'abusefilter-history-comments' => 'Comments',
	'abusefilter-history-actions' => 'Actions',
	'abusefilter-history-action' => '$1: $2',
	'abusefilter-history-backedit' => 'Back to filter editor',
	'abusefilter-history-backlist' => 'Back to filter list',
);

/** Faeag Rotuma (Faeag Rotuma)
 * @author Jose77
 */
$messages['rtm'] = array(
	'abusefilter-list-edit' => "A'tū'ạki",
);

/** Niuean (ko e vagahau Niuē)
 * @author Jose77
 */
$messages['niu'] = array(
	'abusefilter-log-search-submit' => 'Kumi',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'abuselog'                              => 'Misbruiklogboek',
	'abusefilter-blocker'                   => 'Misbruikfilter',
	'abusefilter-log-search-user'           => 'Gebruiker:',
	'abusefilter-log-search-title'          => 'Titel:',
	'abusefilter-log-search-submit'         => 'Soek',
	'abusefilter-log-detailslink'           => 'details',
	'abusefilter-log-details-var'           => 'Veranderlike',
	'abusefilter-log-details-val'           => 'Waarde',
	'abusefilter-log-noactions'             => 'geen',
	'abusefilter-list-status'               => 'Status',
	'abusefilter-list-public'               => 'Publieke beskrywing',
	'abusefilter-list-consequences'         => 'Gevolge',
	'abusefilter-list-visibility'           => 'Sigbaarheid',
	'abusefilter-list-edit'                 => 'Wysig',
	'abusefilter-list-details'              => 'Details',
	'abusefilter-hidden'                    => 'Privaat',
	'abusefilter-unhidden'                  => 'Publiek',
	'abusefilter-tools-modifiertest-submit' => 'Toets',
	'abusefilter-tools-value'               => 'Waarde om te toets:',
	'abusefilter-tools-result'              => 'Resultaat:',
	'abusefilter-edit-status-label'         => 'Statistieke',
	'abusefilter-edit-throttle-seconds'     => '$1 sekondes',
);

/** Arabic (العربية)
 * @author Meno25
 * @author Alnokta
 */
$messages['ar'] = array(
	'abusefilter-desc'                                      => 'يطبق قواعد أوتوماتيكية على التعديلات.',
	'abusefilter'                                           => 'ضبط فلتر الإساءة',
	'abuselog'                                              => 'سجل الإساءة',
	'abusefilter-warning'                                   => "<big>'''تحذير'''</big>: هذا الفعل تم التعرف عليه تلقائيا كضار.
التعديلات غير البناءة سيتم استرجاعها سريعا،
والتعديل غير البناء المتكرر أو المستمر سيؤدي إلى منع حسابك أو حاسوبك.
لو كنت تعتقد أن هذا التعديل بناء، يمكنك أن تضغط تنفيذ مرة أخرى لتأكيده.
وصف مختصر لقاعدة الإساءة التي طابقها فعلك هو: $1",
	'abusefilter-disallowed'                                => 'هذا الفعل تم التعرف عليه تلقائيا كضار،
ولذا تم منعه.
لو كنت تعتقد أن تعديلك بناء، من فضلك اتصل بإداري، وأخبره بما كنت تحاول أن تفعل.
وصف مختصر لقاعدة الإساءة التي طابقها فعلك هو: $1',
	'abusefilter-blocked-display'                           => 'هذا الفعل تم التعرف عليه تلقائيا كضار،
وأنت تم منعك من تنفيذه.
بالإضافة إلى ذلك، لحماية {{SITENAME}}، حسابك وكل عناوين الأيبي الملحقة تم منعها من التحرير.
لو أن هذا حدث بطريق الخطأ، من فضلك اتصل بإداري.
وصف مختصر لقاعدة الإساءة التي طابقها فعلك هو: $1',
	'abusefilter-degrouped'                                 => 'هذا الفعل تم التعرف عليه تلقائيا كضار.
وبالتالي، تم منعه، و، بما أن حسابك مشكوك في أنه قد تم اختراقه، كل الصلاحيات تم سحبها.
لو أنك تعتقد أن هذا خطأ، من فضلك اتصل ببيروقراط بتفسير لهذا الفعل، وصلاحياتك ربما تتم استعادتها.
وصف مختصر لقاعدة الإساءة التي طابقها فعلك هو: $1',
	'abusefilter-autopromote-blocked'                       => 'هذا الفعل تم التعرف عليه تلقائيا كضار، وتم منعه.
بالإضافة إلى ذلك، كإجراء أمني، بعض المميزات التي يتم منحها روتينيا للحسابات تمت إزالتها مؤقتا من حسابك.
وصف مختصر لقاعدة الإساءة التي طابقها فعلك هو: $1',
	'abusefilter-blocker'                                   => 'فلتر الإساءة',
	'abusefilter-blockreason'                               => 'ممنوع تلقائيا بواسطة فلتر الإساءة. وصف القاعدة: $1',
	'abusefilter-degroupreason'                             => 'الصلاحيات تمت إزالتها تلقائيا بواسطة فلتر الإساءة. وصف القاعدة: $1',
	'abusefilter-accountreserved'                           => 'اسم الحساب هذا محجوز للاستخدام بواسطة فلتر الإساءة.',
	'right-abusefilter-modify'                              => 'تعديل فلترات الإساءة',
	'right-abusefilter-view'                                => 'عرض فلترات الإساءة',
	'right-abusefilter-log'                                 => 'عرض سجل الإساءة',
	'right-abusefilter-log-detail'                          => 'عرض مدخلات سجل الإساءة المفصلة',
	'right-abusefilter-private'                             => 'عرض البيانات السرية في سجل الإساءة',
	'abusefilter-log'                                       => 'سجل فلتر الإساءة',
	'abusefilter-log-search'                                => 'بحث سجل الإساءة',
	'abusefilter-log-search-user'                           => 'المستخدم:',
	'abusefilter-log-search-filter'                         => 'رقم الفلتر:',
	'abusefilter-log-search-title'                          => 'العنوان:',
	'abusefilter-log-search-submit'                         => 'بحث',
	'abusefilter-log-entry'                                 => '$1: $2 فعل فلتر إساءة، فاعلا $3 في $4. الأفعال المتخذة: $5؛ وصف الفلتر: $6',
	'abusefilter-log-detailedentry'                         => '$1: $2 فعل الفلتر $3، فاعلا $4 في $5. الأفعال المتخذة: $6؛ وصف الفلتر: $7 ($8)',
	'abusefilter-log-detailslink'                           => 'التفاصيل',
	'abusefilter-log-details-legend'                        => 'التفاصيل لمدخلة السجل $1',
	'abusefilter-log-details-var'                           => 'متغير',
	'abusefilter-log-details-val'                           => 'قيمة',
	'abusefilter-log-details-vars'                          => 'محددات الفعل',
	'abusefilter-log-details-private'                       => 'بيانات سرية',
	'abusefilter-log-details-ip'                            => 'عنوان الأيبي المصدر',
	'abusefilter-log-noactions'                             => 'لا شيء',
	'abusefilter-management'                                => 'التحكم بفلتر الإساءة',
	'abusefilter-list'                                      => 'كل الفلاتر',
	'abusefilter-list-id'                                   => 'رقم الفلتر',
	'abusefilter-list-status'                               => 'الحالة',
	'abusefilter-list-public'                               => 'وصف علني',
	'abusefilter-list-consequences'                         => 'العواقب',
	'abusefilter-list-visibility'                           => 'رؤية',
	'abusefilter-list-hitcount'                             => 'عدد الضربات',
	'abusefilter-list-edit'                                 => 'عدل',
	'abusefilter-list-details'                              => 'التفاصيل',
	'abusefilter-hidden'                                    => 'سري',
	'abusefilter-unhidden'                                  => 'علني',
	'abusefilter-enabled'                                   => 'مفعل',
	'abusefilter-disabled'                                  => 'معطل',
	'abusefilter-hitcount'                                  => '$1 {{PLURAL:$1|ضربة|ضربة}}',
	'abusefilter-list-new'                                  => 'فلتر جديد',
	'abusefilter-tools-modifiertest-submit'                 => 'اختبار',
	'abusefilter-tools'                                     => 'بعض [[Special:AbuseFilter/tools|الأدوات]] متوفرة للمساعدة في صياغة وتصحيح فلترات الإساءة.',
	'abusefilter-tools-subtitle'                            => 'أدوات',
	'abusefilter-tools-text'                                => 'هنا بعض الأدوات التي ربما تكون مفيدة في صياغة وتصليح فلترات الإساءة. [[Special:AbuseFilter|رجوع إلى القائمة الرئيسية]]',
	'abusefilter-tools-expr'                                => 'مختبر التعبير',
	'abusefilter-tools-submitexpr'                          => 'تقييم',
	'abusefilter-status'                                    => 'من آخر $1 {{PLURAL:$1|فعل|فعل}}، $2 ($3%) {{PLURAL:$2|وصل|وصل}} إلى حد الحالة ل$4. $5 ($6%) {{PLURAL:$5|طابق|طابق}} واحدا من الفلترات المفعلة حاليا.',
	'abusefilter-edit-subtitle'                             => 'تعديل الفلتر $1',
	'abusefilter-edit-status-label'                         => 'إحصاءات',
	'abusefilter-edit-status'                               => 'من آخر $1 {{PLURAL:$1|تعديل|تعديل}}، هذا الفلتر طابق $2 ($3%).',
	'abusefilter-edit-throttled'                            => "'''تحذير''': هذا الفلتر تم تعطيله تلقائيا كإجراء أمني. لقد وصل إلى حد مطابقة أكثر من $1% من الأفعال.",
	'abusefilter-edit-new'                                  => 'فلتر جديد',
	'abusefilter-edit-save'                                 => 'حفظ الفلتر',
	'abusefilter-edit-id'                                   => 'رقم الفلتر:',
	'abusefilter-edit-description'                          => "الوصف:
:''(معروض علنيا)''",
	'abusefilter-edit-flags'                                => 'الأعلام:',
	'abusefilter-edit-enabled'                              => 'تفعيل هذا الفلتر',
	'abusefilter-edit-hidden'                               => 'إخفاء تفاصيل هذا الفلتر من العرض العلني',
	'abusefilter-edit-rules'                                => 'الشروط:',
	'abusefilter-edit-notes'                                => "ملاحظات:
:''(سرية)",
	'abusefilter-edit-lastmod'                              => 'فلتر المعدل آخرا',
	'abusefilter-edit-lastuser'                             => 'آخر مستخدم عدل هذا الفلتر:',
	'abusefilter-edit-hitcount'                             => 'ضربات الفلتر:',
	'abusefilter-edit-consequences'                         => 'الأفعال المتخذة عند الضرب',
	'abusefilter-edit-action-warn'                          => 'نفذ هذه الأفعال بعد إعطاء المستخدم تحذيرا',
	'abusefilter-edit-action-disallow'                      => 'امنع المستخدم من عمل الفعل المقصود',
	'abusefilter-edit-action-flag'                          => 'علم على التعديل في سجل الإساءة',
	'abusefilter-edit-action-blockautopromote'              => 'اسحب حالة التأكيد التلقائي من المستخدم',
	'abusefilter-edit-action-degroup'                       => 'أزل المستخدم من كل المجموعات المميزة',
	'abusefilter-edit-action-block'                         => 'امنع المستخدم و/أو عنوان الأيبي من التحرير',
	'abusefilter-edit-action-throttle'                      => 'نفذ الأفعال فقط إذا ما تجاوز المستخدم حد المعدل',
	'abusefilter-edit-throttle-count'                       => 'عدد الأفعال المسموح بها:',
	'abusefilter-edit-throttle-period'                      => 'فترة من الزمن:',
	'abusefilter-edit-throttle-seconds'                     => '$1 ثانية',
	'abusefilter-edit-throttle-groups'                      => "حد المجموعة بواسطة:
:''(واحدة لكل سطر، ادمج بالفاصلات)''",
	'abusefilter-edit-denied'                               => 'أنت لا يمكنك رؤية تفاصيل هذا الفلتر، لأنه مخفي من العرض العلني',
	'abusefilter-edit-main'                                 => 'محددات الفلتر',
	'abusefilter-edit-done-subtitle'                        => 'الفلتر تم تعديله',
	'abusefilter-edit-done'                                 => 'أنت حفظت تغييراتك للفلتر بنجاح.

[[Special:AbuseFilter|رجوع]]',
	'abusefilter-edit-badsyntax'                            => 'هناك خطأ صياغة في الفلتر الذي حددته. الخرج من المحلل كان: <pre>$1</pre>',
	'abusefilter-edit-viewhistory'                          => 'عرض تاريخ هذا الفلتر',
	'abusefilter-edit-history'                              => 'تاريخ',
	'abusefilter-edit-check'                                => 'تحقق من الصياغة',
	'abusefilter-edit-builder-select'                       => 'اختر خيارا لإضافته عند البكرة',
	'abusefilter-edit-builder-group-op-arithmetic'          => 'معاملات حسابية',
	'abusefilter-edit-builder-op-arithmetic-addition'       => 'جمع (+)',
	'abusefilter-edit-builder-op-arithmetic-subtraction'    => 'طرح (-)',
	'abusefilter-edit-builder-op-arithmetic-multiplication' => 'ضرب (*)',
	'abusefilter-edit-builder-op-arithmetic-divide'         => 'قسمة (/)',
	'abusefilter-edit-builder-op-arithmetic-modulo'         => 'مودولو (%)',
	'abusefilter-edit-builder-op-arithmetic-pow'            => 'أس (**)',
	'abusefilter-edit-builder-group-op-comparison'          => 'معاملات مقارنة',
	'abusefilter-edit-builder-op-comparison-equal'          => 'مساوي ل(==)',
	'abusefilter-edit-builder-op-comparison-notequal'       => 'غير مساوي ل(!=)',
	'abusefilter-edit-builder-op-comparison-lt'             => 'أقل من (<)',
	'abusefilter-edit-builder-op-comparison-gt'             => 'أكبر من (>)',
	'abusefilter-edit-builder-op-comparison-lte'            => 'أصغر من أو يساوي (<=)',
	'abusefilter-edit-builder-op-comparison-gte'            => 'أكبر من أو يساوي (>=)',
	'abusefilter-edit-builder-group-op-bool'                => 'معاملات منطقية',
	'abusefilter-edit-builder-op-bool-not'                  => 'ليس (!)',
	'abusefilter-edit-builder-op-bool-and'                  => 'و (&)',
	'abusefilter-edit-builder-op-bool-or'                   => 'أو (|)',
	'abusefilter-edit-builder-op-bool-xor'                  => 'حصري أو (^)',
	'abusefilter-edit-builder-group-misc'                   => 'منوعات',
	'abusefilter-edit-builder-misc-ternary'                 => 'معامل ثلاثي (1 ? 2 : 3)',
	'abusefilter-edit-builder-misc-in'                      => 'موجود في سلسلة (in)',
	'abusefilter-edit-builder-misc-like'                    => 'يطابق تعبيرا منتظما (like)',
	'abusefilter-edit-builder-group-funcs'                  => 'دوال',
	'abusefilter-edit-builder-funcs-length'                 => 'طول السلسلة (length)',
	'abusefilter-edit-builder-funcs-lcase'                  => 'إلى حروف صغيرة (lcase)',
	'abusefilter-edit-builder-funcs-ccnorm'                 => 'معادلة الحروف المختلطة (ccnorm)',
	'abusefilter-edit-builder-funcs-rmdoubles'              => 'إزالة الحروف المزدوجة (rmdoubles)',
	'abusefilter-edit-builder-funcs-specialratio'           => 'حروف خاصة / إجمالي الحروف (specialratio)',
	'abusefilter-edit-builder-funcs-norm'                   => 'معادلة (norm)',
	'abusefilter-edit-builder-funcs-count'                  => 'عدد المرات التي تظهر فيها السلسلة X في السلسلة Y (count)',
	'abusefilter-edit-builder-group-vars'                   => 'متغيرات',
	'abusefilter-edit-builder-vars-accountname'             => 'اسم الحساب (on account creation)',
	'abusefilter-edit-builder-vars-action'                  => 'فعل',
	'abusefilter-edit-builder-vars-addedlines'              => 'السطور المضافة في التعديل',
	'abusefilter-edit-builder-vars-delta'                   => 'الحجم المتغير في التعديل',
	'abusefilter-edit-builder-vars-diff'                    => 'فرق موحد للتغييرات المصنوعة بواسطة التعديل',
	'abusefilter-edit-builder-vars-newsize'                 => 'حجم الصفحة الجديد',
	'abusefilter-edit-builder-vars-oldsize'                 => 'حجم الصفحة القديم',
	'abusefilter-edit-builder-vars-removedlines'            => 'السطور المزالة في التعديل',
	'abusefilter-edit-builder-vars-summary'                 => 'ملخص التعديل/السبب',
	'abusefilter-edit-builder-vars-article-id'              => 'رقم المقالة',
	'abusefilter-edit-builder-vars-article-ns'              => 'نطاق المقالة',
	'abusefilter-edit-builder-vars-article-text'            => 'عنوان المقالة (بدون النطاق)',
	'abusefilter-edit-builder-vars-article-prefixedtext'    => 'عنوان المقالة الكامل',
	'abusefilter-edit-builder-vars-movedfrom-id'            => 'رقم المقالة للصفحة المصدر للنقل',
	'abusefilter-edit-builder-vars-movedfrom-ns'            => 'نطاق الصفحة المصدر للنقل',
	'abusefilter-edit-builder-vars-movedfrom-text'          => 'عنوان الصفحة المصدر للنقل',
	'abusefilter-edit-builder-vars-movedfrom-prefixedtext'  => 'العنوان الكامل للصفحة المصدر للنقل',
	'abusefilter-edit-builder-vars-movedto-id'              => 'رقم المقالة للصفحة الهدف للنقل',
	'abusefilter-edit-builder-vars-movedto-ns'              => 'نطاق الصفحة الهدف للنقل',
	'abusefilter-edit-builder-vars-movedto-text'            => 'عنوان الصفحة الهدف للنقل',
	'abusefilter-edit-builder-vars-movedto-prefixedtext'    => 'العنوان الكامل للصفحة الهدف للنقل',
	'abusefilter-edit-builder-vars-user-editcount'          => 'عدد التعديلات للمستخدم',
	'abusefilter-edit-builder-vars-user-age'                => 'عمر حساب المستخدم',
	'abusefilter-edit-builder-vars-user-name'               => 'اسم حساب المستخدم',
	'abusefilter-edit-builder-vars-user-groups'             => 'المجموعات (متضمنة غير المباشرة) التي المستخدم فيها',
	'abusefilter-edit-builder-vars-user-emailconfirm'       => 'وقت تأكيد عنوان البريد الإلكتروني',
	'abusefilter-history'                                   => 'التاريخ للفلتر $1',
	'abusefilter-history-hidden'                            => 'مخفي',
	'abusefilter-history-enabled'                           => 'مفعل',
	'abusefilter-history-timestamp'                         => 'وقت',
	'abusefilter-history-user'                              => 'مستخدم',
	'abusefilter-history-public'                            => 'وصف الفلتر العلني',
	'abusefilter-history-flags'                             => 'أعلام',
	'abusefilter-history-filter'                            => 'قاعدة الفلتر',
	'abusefilter-history-comments'                          => 'تعليقات',
	'abusefilter-history-actions'                           => 'أفعال',
	'abusefilter-history-backedit'                          => 'رجوع إلى محرر الفلتر',
	'abusefilter-history-backlist'                          => 'رجوع إلى قائمة الفلتر',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Ramsis1978
 */
$messages['arz'] = array(
	'abusefilter-log-search-user'              => 'يوزر:',
	'abusefilter-log-search-title'             => 'العنوان:',
	'abusefilter-log-search-submit'            => 'دور',
	'abusefilter-log-detailslink'              => 'التفاصيل:',
	'abusefilter-log-details-legend'           => 'التفاصيل بتاعة مدخلة السجل $1',
	'abusefilter-log-details-var'              => 'متغير',
	'abusefilter-log-details-val'              => 'القيمة',
	'abusefilter-log-details-vars'             => 'محددات الفعل',
	'abusefilter-log-details-private'          => 'معلومات سرية',
	'abusefilter-log-details-ip'               => 'العنوان بتاع الآي بي الأصلي',
	'abusefilter-log-noactions'                => 'مافيش',
	'abusefilter-management'                   => 'إدارة الفلتر بتاع الإساءة',
	'abusefilter-list'                         => 'كل الفلاتر',
	'abusefilter-list-id'                      => 'رقم الفلتر',
	'abusefilter-list-status'                  => 'الحالة',
	'abusefilter-list-public'                  => 'وصف عام',
	'abusefilter-list-consequences'            => 'العواقب',
	'abusefilter-list-visibility'              => 'الرؤية',
	'abusefilter-list-hitcount'                => 'عدد الضربات',
	'abusefilter-list-edit'                    => 'تعديل',
	'abusefilter-list-details'                 => 'التفاصيل',
	'abusefilter-hidden'                       => 'خصوصي',
	'abusefilter-unhidden'                     => 'عام',
	'abusefilter-enabled'                      => 'متفعل',
	'abusefilter-disabled'                     => 'متعطل',
	'abusefilter-hitcount'                     => '$1 {{PLURAL:$1|ضربة|ضربة}}',
	'abusefilter-list-new'                     => 'فلتر جديد',
	'abusefilter-tools-modifiertest-submit'    => 'اختبار',
	'abusefilter-edit-action-disallow'         => 'منع الفعل',
	'abusefilter-edit-action-flag'             => 'علم على التعديل في سجل الإساءة',
	'abusefilter-edit-action-blockautopromote' => 'اسحب حالة التأكيد الأوتوماتيكي من اليوزر',
	'abusefilter-edit-action-degroup'          => 'شيل كل المجموعات المميزة من اليوزر',
	'abusefilter-edit-action-block'            => 'إمنع اليوزر من التحرير',
	'abusefilter-edit-action-throttle'         => 'نفذ الأفعال بس لو اليوزر اتجاوز حد المعدل',
	'abusefilter-edit-throttle-count'          => 'عدد الأفعال المسموح بيها:',
	'abusefilter-edit-throttle-period'         => 'مدة من الزمن:',
	'abusefilter-edit-throttle-seconds'        => '$1 ثواني',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author Red Winged Duck
 * @author Jim-by
 * @author Cesco
 * @author EugeneZelenko
 */
$messages['be-tarask'] = array(
	'abusefilter-desc'                      => 'Прыстасоўвае аўтаматычную эўрыстыку да рэдагаваньняў.',
	'abusefilter'                           => 'Наладка фільтра злоўжываньняў',
	'abuselog'                              => 'Журнал злоўжываньняў',
	'abusefilter-warning'                   => "<big>'''Увага'''</big>: Гэтае дзеяньне будзе аўтаматычна лічыцца шкодным. Неканструктыўныя рэдагаваньні будуць адмененыя, і значныя ці неаднаразовыя неканструктыўныя рэдагаваньні прывядуць да блякаваньня Вашага рахунка ці кампутара. Калі Вы лічыце гэтае рэдагаваньне канструктыўным, Вам неабходна націснуць «Адправіць» яшчэ раз каб яго пацьвердзіць.
Кароткі сьпіс злоўжываньняў, зь якімі суадносіцца Вашае дзеяньне тут: $1",
	'abusefilter-log-search-filter'         => 'Ідэнтыфікатар фільтру:',
	'abusefilter-log-detailslink'           => 'падрабязнасьці',
	'abusefilter-log-noactions'             => 'няма',
	'abusefilter-list'                      => 'Усе фільтры',
	'abusefilter-list-edit'                 => 'Рэдагаваць',
	'abusefilter-list-details'              => 'Падрабязнасьці',
	'abusefilter-list-new'                  => 'Новы фільтар',
	'abusefilter-tools-modifiertest-submit' => 'Тэст',
	'abusefilter-edit-status-label'         => 'Статыстыка',
	'abusefilter-edit-new'                  => 'Новы фільтар',
	'abusefilter-edit-save'                 => 'Захаваць фільтар',
	'abusefilter-edit-history'              => 'Гісторыя',
	'abusefilter-history-comments'          => 'Камэнтары',
);

/** Bulgarian (Български)
 * @author DCLXVI
 * @author Петър Петров
 */
$messages['bg'] = array(
	'abusefilter-desc'                                      => 'Извършва автоматична евристика на редакциите.',
	'abusefilter'                                           => 'Настройка на защитата от вредоносни действия',
	'abuselog'                                              => 'Дневник на вредоносните действия',
	'abusefilter-warning'                                   => "<big>'''Внимание'''</big>: Извършваното действие беше автоматично разпознато като вредоносно.
Неконструктивните редакции лесно ще бъдат премахнати,
а демонстративното или упоритото вредене ще доведе до блокиране на потребителската ви сметка или IP адрес.
Ако вярвате, че тази редакция е конструктивна, можете да натиснете „Съхранение“, за да го потвърдите.
Кратко описание на правилото, по което вашето действие беше разпознато: $1",
	'abusefilter-disallowed'                                => 'Извършваното действие беше автоматично разпознато като вредоносно и не беше извършено.
Ако вярвате, че тази редакция е конструктивна, моля свържете се с администратор и опишете точно какво се опитахте да направите.
Кратко описание на правилото, по което вашето действие беше разпознато: $1',
	'abusefilter-blocked-display'                           => 'Извършваното действие беше автоматично разпознато като вредоносно и беше спряно.
В допълнение, за защита на {{SITENAME}}, вашата потребителска сметка и IP адрес бяха блокирани.
Ако смятате, че тази реакция на системата е погрешна, моля свържете се с администратор.
Кратко описание на правилото, по което вашето действие беше разпознато: $1',
	'abusefilter-degrouped'                                 => 'Извършваното действие беше автоматично разпознато като вредоносно и беше спряно.  В допълнение, настоящата потребителска сметка прилича на открадната и поради това беше лишена от всички потребителски привилегии.
Ако смятате, че тази реакция на системата е погрешна, моля свържете се с бюрократ, обяснете действията си и привилегиите ви може да бъдат възстановени.
Кратко описание на правилото, по което вашето действие беше разпознато: $1',
	'abusefilter-autopromote-blocked'                       => 'Извършваното действие беше автоматично разпознато като вредоносно и беше спряно.
За допълнителна защита, някои привилегии, които обикновено се дават на редовните потребители, временно бяха отнети от вашата потребителска сметка.
Кратко описание на правилото, по което вашето действие беше разпознато: $1',
	'abusefilter-blocker'                                   => 'Защита от вредоносни действия',
	'abusefilter-blockreason'                               => 'Защита от вредоносни действия: автоматично блокиране.  Причина: $1',
	'abusefilter-degroupreason'                             => 'Защита от вредоносни действия: автоматично отнемане на привилегии.  Причина: $1',
	'abusefilter-accountreserved'                           => 'Това име на сметка е запазено за употреба от филтъра против вредоносни действия.',
	'right-abusefilter-modify'                              => 'Промяна на филтрите против вредоносни действия',
	'right-abusefilter-view'                                => 'Преглеждане на филтрите против вредоносни действия',
	'right-abusefilter-log'                                 => 'Преглеждане на дневника на вредоносните действия',
	'right-abusefilter-log-detail'                          => 'Преглеждане на подробни записи в дневника на вредоносните действия',
	'right-abusefilter-private'                             => 'Преглеждане на скритите данни в дневника с вредоносни действия',
	'abusefilter-log'                                       => 'Дневник на защитата от вредоносни действия',
	'abusefilter-log-search'                                => 'Търсене в дневника със злоупотреби',
	'abusefilter-log-search-user'                           => 'Потребител:',
	'abusefilter-log-search-filter'                         => 'Идентификатор на филтър:',
	'abusefilter-log-search-title'                          => 'Заглавие:',
	'abusefilter-log-search-submit'                         => 'Търсене',
	'abusefilter-log-entry'                                 => '$1: $2 задейства защитен филтър, извършвайки $3 на $4. Последвали действия: $5; Описание на филтъра: $6',
	'abusefilter-log-detailedentry'                         => '$1: $2 задейства филтър $3, извършвайки $4 на $5. Последвали действия: $6; Описание на филтъра: $7 ($8)',
	'abusefilter-log-detailslink'                           => 'детайли',
	'abusefilter-log-details-legend'                        => 'Детайли за запис от дневника $1',
	'abusefilter-log-details-var'                           => 'Променлива',
	'abusefilter-log-details-val'                           => 'Стойност',
	'abusefilter-log-details-vars'                          => 'Параметри на действието',
	'abusefilter-log-details-private'                       => 'Скрити данни',
	'abusefilter-log-details-ip'                            => 'IP адрес',
	'abusefilter-log-noactions'                             => 'няма',
	'abusefilter-management'                                => 'Управление на защитата против вредоносни действия',
	'abusefilter-list'                                      => 'Всички филтри',
	'abusefilter-list-id'                                   => 'Идентификатор на филтър',
	'abusefilter-list-status'                               => 'Статут',
	'abusefilter-list-public'                               => 'Публично описание',
	'abusefilter-list-consequences'                         => 'Последствия',
	'abusefilter-list-visibility'                           => 'Видимост',
	'abusefilter-list-hitcount'                             => 'Брой съвпадения',
	'abusefilter-list-edit'                                 => 'Редактиране',
	'abusefilter-list-details'                              => 'Детайли',
	'abusefilter-hidden'                                    => 'Скрит',
	'abusefilter-unhidden'                                  => 'Видим',
	'abusefilter-enabled'                                   => 'включен',
	'abusefilter-disabled'                                  => 'изключен',
	'abusefilter-hitcount'                                  => '$1 {{PLURAL:$1|съвпадение|съвпадения}}',
	'abusefilter-list-new'                                  => 'Нов филтър',
	'abusefilter-tools-modifiertest-submit'                 => 'тест',
	'abusefilter-tools'                                     => 'Има помощни [[Special:AbuseFilter/tools|инструменти]] за съставяне и поправяне на защитни филтри.',
	'abusefilter-tools-subtitle'                            => 'Инструменти',
	'abusefilter-tools-text'                                => 'Тук има някои инструменти, които може да са полезни за създаване или поправяне на защитни филтри.  [[Special:AbuseFilter|Назад към главното меню]]',
	'abusefilter-tools-expr'                                => 'Проверка на изрази',
	'abusefilter-tools-submitexpr'                          => 'Проверка',
	'abusefilter-status'                                    => 'От {{PLURAL:$1|последното едно действие|последните $1 действия}}, $2 ($3%) {{PLURAL:$2|достигна|достигнаха}} условната граница от $4. $5 ($6%) от тях {{PLURAL:$5|съвпада|съвпадат}} с някой от текущо включените филтри.',
	'abusefilter-edit-subtitle'                             => 'Редактиране на филтър $1',
	'abusefilter-edit-status-label'                         => 'Статистики',
	'abusefilter-edit-status'                               => 'От {{PLURAL:$1|последното едно действие|последните $1 действия}}, този филтър съвпадна с $2 от тях ($3%).',
	'abusefilter-edit-throttled'                            => "'''Внимание''': Този филтър беше автоматично изключен, тъй като съвпада с над $1% от всички действия.  Това е направено като предпазна мярка.",
	'abusefilter-edit-new'                                  => 'Нов филтър',
	'abusefilter-edit-save'                                 => 'Съхраняване на филтъра',
	'abusefilter-edit-id'                                   => 'Идентификатор на филтър:',
	'abusefilter-edit-description'                          => "Описание:
:''(видимо публично)''",
	'abusefilter-edit-enabled'                              => 'Включване на този филтър',
	'abusefilter-edit-hidden'                               => 'Скриване на детайлите на този филтър от общодостъпно разглеждане',
	'abusefilter-edit-rules'                                => 'Условия:',
	'abusefilter-edit-notes'                                => "Забележки:
:''(скрит)",
	'abusefilter-edit-lastmod'                              => 'Последна промяна на филтъра:',
	'abusefilter-edit-lastuser'                             => 'Филтърът е последно променян от потребител:',
	'abusefilter-edit-hitcount'                             => 'Съвпадения на филтъра:',
	'abusefilter-edit-consequences'                         => 'Действия след съвпадение',
	'abusefilter-edit-action-warn'                          => 'Извършване на тези действия след предупреждение на потребителя',
	'abusefilter-edit-action-disallow'                      => 'Не позволявай на потребителя да извърши въпросното действие',
	'abusefilter-edit-action-flag'                          => 'Отбелязване на редакцията в дневника на злоупотребите',
	'abusefilter-edit-action-blockautopromote'              => 'Отнемане на привилегията „Автоматично одобрен потребител“ (autoconfirmed)',
	'abusefilter-edit-action-degroup'                       => 'Изключване на потребителя от всички привилегировани групи',
	'abusefilter-edit-action-block'                         => 'Блокиране на потребителя и/или IP адреса',
	'abusefilter-edit-action-throttle'                      => 'Изпълнение на действията само ако потребителят превиши определена честота на редакциите',
	'abusefilter-edit-throttle-count'                       => 'Брой позволени действия:',
	'abusefilter-edit-throttle-period'                      => 'Период от време:',
	'abusefilter-edit-throttle-seconds'                     => '$1 секунди',
	'abusefilter-edit-denied'                               => 'Не можете да видите детайлите на този филтър, защото не са общодостъпни',
	'abusefilter-edit-main'                                 => 'Параметри на филтъра',
	'abusefilter-edit-done-subtitle'                        => 'Филтърът беше редактиран',
	'abusefilter-edit-done'                                 => 'Промените във филтъра са съхранени успешно.

[[Special:AbuseFilter|Връщане]]',
	'abusefilter-edit-badsyntax'                            => 'В зададения филтър има синтактична грешка.  Резултатът от парсера е: <pre>$1</pre>',
	'abusefilter-edit-viewhistory'                          => 'Преглед на историята на този филтър',
	'abusefilter-edit-history'                              => 'История',
	'abusefilter-edit-check'                                => 'Проверка на синтаксиса',
	'abusefilter-edit-builder-group-op-arithmetic'          => 'Аритметични оператори',
	'abusefilter-edit-builder-op-arithmetic-addition'       => 'Събиране (+)',
	'abusefilter-edit-builder-op-arithmetic-subtraction'    => 'Изваждане (-)',
	'abusefilter-edit-builder-op-arithmetic-multiplication' => 'Умножение (*)',
	'abusefilter-edit-builder-op-arithmetic-divide'         => 'Деление (/)',
	'abusefilter-edit-builder-group-funcs'                  => 'Функции',
	'abusefilter-edit-builder-vars-action'                  => 'Действие',
	'abusefilter-edit-builder-vars-user-editcount'          => 'Брой редакции на потребителя',
	'abusefilter-edit-builder-vars-user-age'                => 'Възраст на потребителската сметка',
	'abusefilter-edit-builder-vars-user-name'               => 'Име на потребителската сметка',
	'abusefilter-history'                                   => 'История за филтър $1',
	'abusefilter-history-hidden'                            => 'скрит',
	'abusefilter-history-enabled'                           => 'включен',
	'abusefilter-history-timestamp'                         => 'Време',
	'abusefilter-history-user'                              => 'Потребител',
	'abusefilter-history-public'                            => 'Описание на публичен филтър',
	'abusefilter-history-filter'                            => 'Правило на филтъра',
	'abusefilter-history-comments'                          => 'Коментари',
	'abusefilter-history-actions'                           => 'Действия',
	'abusefilter-history-backedit'                          => 'Връщане към редактора на филтри',
	'abusefilter-history-backlist'                          => 'Назад към списъка с филтри',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'abusefilter-log-search-user'       => 'Implijer :',
	'abusefilter-log-search-submit'     => 'Klask',
	'abusefilter-list-details'          => 'Munudoù',
	'abusefilter-hidden'                => 'Prevez',
	'abusefilter-unhidden'              => 'Foran',
	'abusefilter-edit-new'              => 'Sil nevez',
	'abusefilter-edit-save'             => 'Enrollañ ar sil',
	'abusefilter-edit-throttle-period'  => 'Prantad amzer :',
	'abusefilter-edit-throttle-seconds' => '$1 eilenn',
);

/** German (Deutsch)
 * @author Pill
 * @author Leithian
 * @author ChrisiPK
 * @author Revolus
 */
$messages['de'] = array(
	'abusefilter-desc'                                      => 'Wendet automatische Heuristiken auf Änderungen an.',
	'abusefilter'                                           => 'Missbrauchsfilter-Einstellungen',
	'abuselog'                                              => 'Missbrauchs-Logbuch',
	'abusefilter-warning'                                   => "<big>'''Achtung'''</big>: Diese Aktion wurde automatisch als schädlich erkannt.
Unkonstruktive Beiträge werden meist sehr schnell entfernt. In wiederholten und besonders schlimmen Fällen wird dein Account bzw. deine IP-Adresse gesperrt.
Wenn du denkst, dass deine Änderung konstruktiv war, kannst du sie jedoch mit einem erneuten Klick auf „{{int:savearticle}}“ bestätigen.

Kurzbeschreibung der verletzten Regel: $1",
	'abusefilter-disallowed'                                => 'Diese Aktion wurde automatisch als schädlich erkannt und deshalb nicht durchgeführt.
Wenn du denkst, dass dein Beitrag konstruktiv war, wende dich bitte an einen Administrator und schildere ihm, was du versucht hast beizutragen.

Kurzbeschreibung der verletzten Regel: $1',
	'abusefilter-blocked-display'                           => 'Diese Aktion wurde automatisch als schädlich erkannt und nicht ausgeführt.
Ferner wurde dein Benutzeraccount und alle zugehörigen IP-Adressen gesperrt.
Wenn du denkst, dass es sich hierbei um einen Fehler handelt, wende dich bitte an einen Administrator.

Kurzbeschreibung der verletzten Regel: $1',
	'abusefilter-degrouped'                                 => 'Diese Aktion wurde als schädlich erkannt und nicht ausgeführt.
Da es möglich ist, dass dein Benutzeraccount kompromittiert wurde, wurden dir alle gewährten Rechte genommen.
Wenn du denkst, dass es sich hierbei um einen Fehler handelt, so wende dich bitte an einen Bürokraten und schildere ihm, was du gerade getan hast, damit deine Rechte wiederhergestellt werden können.

Kurzbeschreibung der verletzten Regel: $1',
	'abusefilter-autopromote-blocked'                       => 'Diese Aktion wurde als schädlich erkannt und nicht ausgeführt.
Zusätzlich wurden dir als eine Sicherheitsmaßnahme einige automatisch vergebenen Rechte kurzzeitig genommen.

Kurzbeschreibung der verletzten Regel: $1',
	'abusefilter-blocker'                                   => 'Missbrauchsfilter',
	'abusefilter-blockreason'                               => 'Du wurdest vom Missbrauchsfilter automatisch gesperrt. Beschreibung der Regel: $1',
	'abusefilter-degroupreason'                             => 'Deine Berechtigungen wurden vom Missbrauchsfilter automatisch beschränkt. Beschreibung der Regel: $1',
	'abusefilter-accountreserved'                           => 'Dieser Benutzername ist für den Missbrauchsfilter reserviert.',
	'right-abusefilter-modify'                              => 'Missbrauchsfilter bearbeiten',
	'right-abusefilter-view'                                => 'Missbrauchsfilter ansehen',
	'right-abusefilter-log'                                 => 'Missbrauchs-Logbuch einsehen',
	'right-abusefilter-log-detail'                          => 'Detailliertes Missbrauchs-Logbuch einsehen',
	'right-abusefilter-private'                             => 'Private Daten im Missbrauchs-Logbuch einsehen',
	'abusefilter-log'                                       => 'Missbrauchsfilter-Logbuch',
	'abusefilter-log-search'                                => 'Missbrauchs-Logbuch durchsuchen',
	'abusefilter-log-search-user'                           => 'Benutzer:',
	'abusefilter-log-search-filter'                         => 'Filter-ID:',
	'abusefilter-log-search-title'                          => 'Titel:',
	'abusefilter-log-search-submit'                         => 'Suchen',
	'abusefilter-log-detailslink'                           => 'Details',
	'abusefilter-log-details-legend'                        => 'Details für den Logbuch-Eintrag $1',
	'abusefilter-log-details-var'                           => 'Variable',
	'abusefilter-log-details-val'                           => 'Wert',
	'abusefilter-log-details-vars'                          => 'Aktionsparameter',
	'abusefilter-log-details-private'                       => 'Private Daten',
	'abusefilter-log-details-ip'                            => 'IP-Adresse des Verursachers',
	'abusefilter-log-noactions'                             => 'keine',
	'abusefilter-management'                                => 'Missbrauchsfilter-Verwaltung',
	'abusefilter-list'                                      => 'Alle Filter',
	'abusefilter-list-id'                                   => 'Filter-ID',
	'abusefilter-list-status'                               => 'Status',
	'abusefilter-list-public'                               => 'Öffentliche Beschreibung',
	'abusefilter-list-consequences'                         => 'Folgen',
	'abusefilter-list-visibility'                           => 'Sichtbarkeit',
	'abusefilter-list-hitcount'                             => 'Trefferzähler',
	'abusefilter-list-edit'                                 => 'Bearbeiten',
	'abusefilter-list-details'                              => 'Details',
	'abusefilter-hidden'                                    => 'Privat',
	'abusefilter-unhidden'                                  => 'Öffentlich',
	'abusefilter-enabled'                                   => 'Aktiviert',
	'abusefilter-disabled'                                  => 'Deaktiviert',
	'abusefilter-hitcount'                                  => '{{PLURAL:$1|1 Treffer|$1 Treffer}}',
	'abusefilter-list-new'                                  => 'Neuer Filter',
	'abusefilter-tools-modifiertest-submit'                 => 'Test',
	'abusefilter-tools'                                     => 'Es existieren [[Special:AbuseFilter/tools|Werkzeuge]], die dich beim Erstellen und Debuggen von Filtern unterstützen.',
	'abusefilter-tools-subtitle'                            => 'Werkzeuge',
	'abusefilter-tools-text'                                => 'Hier sind einige Werkzeuge, die hilfreich sein können beim Formulieren und bei der Fehlersuche von Missbrauchsfiltern. [[Special:AbuseFilter|Zurück zum Missbrauchsfilter-Hauptmenü.]]',
	'abusefilter-tools-expr'                                => 'Expression-Tester',
	'abusefilter-tools-submitexpr'                          => 'Prüfen',
	'abusefilter-status'                                    => 'Von {{PLURAL:$1|der letzten Aktion|den letzten $1 Aktionen}} {{PLURAL:$2|hat eine|haben $2}} ($3 %) den Grenzwert von $4 erreicht. $5 ($6 %) {{PLURAL:$5|wurde|wurden}} von einem der momentan aktivierten Filter erkannt.',
	'abusefilter-edit-subtitle'                             => 'Bearbeite Filter $1',
	'abusefilter-edit-status-label'                         => 'Statistiken',
	'abusefilter-edit-status'                               => 'Von {{PLURAL:$1|der|den}} letzten {{PLURAL:$1|Aktion|$1 Aktionen}} {{PLURAL:$2|wurde|wurden}} $2 ($3 %) von diesem Filter erkannt.',
	'abusefilter-edit-throttled'                            => "'''Warnung''': Dieser Filter wurde sicherheitshalber automatisch deaktiviert. Er hat mehr als die definierte Obergrenze von $1 % der Aktionen erkannt.",
	'abusefilter-edit-new'                                  => 'Neuer Filter',
	'abusefilter-edit-save'                                 => 'Filter speichern',
	'abusefilter-edit-id'                                   => 'Filter-ID:',
	'abusefilter-edit-description'                          => "Beschreibung:
:''(öffentlich sichtbar)''",
	'abusefilter-edit-enabled'                              => 'Diesen Filter aktivieren',
	'abusefilter-edit-hidden'                               => 'Details dieses Filters nicht öffentlich anzeigen',
	'abusefilter-edit-rules'                                => 'Konditionen:',
	'abusefilter-edit-notes'                                => "Notizen:
:''(privat)",
	'abusefilter-edit-lastmod'                              => 'Letzte Bearbeitung des Filters:',
	'abusefilter-edit-lastuser'                             => 'Letzte Bearbeitung des Filters durch:',
	'abusefilter-edit-hitcount'                             => 'Treffer des Filters:',
	'abusefilter-edit-consequences'                         => 'Bei Treffer auszuführende Aktionen',
	'abusefilter-edit-action-warn'                          => 'Aktionen nach Warnung des Benutzers ausführen',
	'abusefilter-edit-action-disallow'                      => 'Unterbindet die vom Benutzer vorgesehene Aktion',
	'abusefilter-edit-action-flag'                          => 'Bearbeitung im Missbrauchs-Logbuch markieren',
	'abusefilter-edit-action-blockautopromote'              => '„Bestätiger Benutzer“-Status entziehen',
	'abusefilter-edit-action-degroup'                       => 'Benutzer aus allen Gruppen mit Sonderrechten entfernen',
	'abusefilter-edit-action-block'                         => 'Benutzer/IP-Adresse sperren',
	'abusefilter-edit-action-throttle'                      => 'Aktion nur auslösen, wenn der Benutzer ein bestimmtes Limit erreicht hat',
	'abusefilter-edit-throttle-count'                       => 'Anzahl erlaubter Aktionen:',
	'abusefilter-edit-throttle-period'                      => 'Zeitraum:',
	'abusefilter-edit-throttle-seconds'                     => '$1 Sekunden',
	'abusefilter-edit-denied'                               => 'Du kannst die Details dieses Filters nicht einsehen, weil sie versteckt sind',
	'abusefilter-edit-main'                                 => 'Filterparameter',
	'abusefilter-edit-done-subtitle'                        => 'Filter bearbeitet',
	'abusefilter-edit-done'                                 => 'Deine Änderungen am Filter wurden erfolgreich gespeichert.

[[Special:AbuseFilter|Zurück]]',
	'abusefilter-edit-badsyntax'                            => 'Der von die spezifizierte Filter enthält einen Syntaxfehler. Die Parserausgabe lautete: <pre>$1</pre>',
	'abusefilter-edit-viewhistory'                          => 'Versionsgeschichte des Filters ansehen',
	'abusefilter-edit-history'                              => 'Versionsgeschichte',
	'abusefilter-edit-check'                                => 'Syntaxprüfung',
	'abusefilter-edit-builder-select'                       => 'Wähle eine Option aus, um sie am Cursor einzufügen',
	'abusefilter-edit-builder-group-op-arithmetic'          => 'Arithmetische Operatoren',
	'abusefilter-edit-builder-op-arithmetic-addition'       => 'Addition (+)',
	'abusefilter-edit-builder-op-arithmetic-subtraction'    => 'Subtraktion (-)',
	'abusefilter-edit-builder-op-arithmetic-multiplication' => 'Multiplikation (*)',
	'abusefilter-edit-builder-op-arithmetic-divide'         => 'Division (/)',
	'abusefilter-edit-builder-op-arithmetic-modulo'         => 'Modulo (%)',
	'abusefilter-edit-builder-op-arithmetic-pow'            => 'Potenz (**)',
	'abusefilter-edit-builder-group-op-comparison'          => 'Vergleichsoperatoren',
	'abusefilter-edit-builder-op-comparison-equal'          => 'Ist gleich (==)',
	'abusefilter-edit-builder-op-comparison-notequal'       => 'Ist nicht gleich (!=)',
	'abusefilter-edit-builder-op-comparison-lt'             => 'Kleiner als (<)',
	'abusefilter-edit-builder-op-comparison-gt'             => 'Größer als (>)',
	'abusefilter-edit-builder-op-comparison-lte'            => 'Kleiner oder gleich (<=)',
	'abusefilter-edit-builder-op-comparison-gte'            => 'Größer oder gleich (>=)',
	'abusefilter-edit-builder-group-op-bool'                => 'Boolesche Operatoren',
	'abusefilter-edit-builder-op-bool-not'                  => 'Nicht (!)',
	'abusefilter-edit-builder-op-bool-and'                  => 'Und (&)',
	'abusefilter-edit-builder-op-bool-or'                   => 'Oder (|)',
	'abusefilter-edit-builder-group-misc'                   => 'Verschiedenes',
	'abusefilter-edit-builder-misc-ternary'                 => 'Ternäroperator (1 ? 2 : 3)',
	'abusefilter-edit-builder-misc-in'                      => 'enthalten in Zeichenfolge (in)',
	'abusefilter-edit-builder-misc-like'                    => 'Passt zu regulärem Ausdruck (like)',
	'abusefilter-edit-builder-group-funcs'                  => 'Funktionen',
	'abusefilter-edit-builder-funcs-length'                 => 'Länge der Zeichenfolge (length)',
	'abusefilter-edit-builder-funcs-lcase'                  => 'In Kleinbuchstaben konvertieren (lcase)',
	'abusefilter-edit-builder-funcs-ccnorm'                 => 'Verwirrende Zeichen normalisieren (ccnorm)',
	'abusefilter-edit-builder-funcs-rmdoubles'              => 'Doppelte Zeichen entfernen (rmdoubles)',
	'abusefilter-edit-builder-funcs-specialratio'           => 'Spezialzeichen / Zeichen insgesamt (specialratio)',
	'abusefilter-edit-builder-funcs-norm'                   => 'Normalisieren (norm)',
	'abusefilter-edit-builder-funcs-count'                  => 'Anzahl der Vorkommnisse der Zeichenfolge X in der Zeichenfolge Y (count)',
	'abusefilter-edit-builder-group-vars'                   => 'Variablen',
	'abusefilter-edit-builder-vars-accountname'             => 'Benutzername (on account creation)',
	'abusefilter-edit-builder-vars-action'                  => 'Aktion',
	'abusefilter-edit-builder-vars-addedlines'              => 'Zeilen bei der Bearbeitung hinzugefügt',
	'abusefilter-edit-builder-vars-delta'                   => 'Größe bei der Bearbeitung geändert',
	'abusefilter-edit-builder-vars-newsize'                 => 'Neue Seitengröße',
	'abusefilter-edit-builder-vars-oldsize'                 => 'Alte Seitengröße',
	'abusefilter-edit-builder-vars-removedlines'            => 'Zeilen bei der Bearbeitung entfernt',
	'abusefilter-edit-builder-vars-summary'                 => 'Zusammenfassung',
	'abusefilter-edit-builder-vars-article-id'              => 'Artikel-ID',
	'abusefilter-edit-builder-vars-article-ns'              => 'Namensraum des Artikels',
	'abusefilter-edit-builder-vars-article-text'            => 'Titel des Artikels (ohne Namensraum)',
	'abusefilter-edit-builder-vars-article-prefixedtext'    => 'Voller Titel des Artikels',
	'abusefilter-edit-builder-vars-user-editcount'          => 'Beitragszählung des Benutzers',
	'abusefilter-edit-builder-vars-user-age'                => 'Alter des Benutzerkontos',
	'abusefilter-edit-builder-vars-user-name'               => 'Name des Benutzerkontos',
	'abusefilter-edit-builder-vars-user-groups'             => 'Gruppen (auch implizite), in denen der Benutzer Mitglied ist',
	'abusefilter-edit-builder-vars-user-emailconfirm'       => 'Zeitpunkt, an dem die E-Mail-Adresse bestätigt wurde',
	'abusefilter-history'                                   => 'Versionsgeschichte für Filter $1',
	'abusefilter-history-hidden'                            => 'versteckt',
	'abusefilter-history-enabled'                           => 'aktiviert',
	'abusefilter-history-timestamp'                         => 'Zeit',
	'abusefilter-history-user'                              => 'Benutzer',
	'abusefilter-history-public'                            => 'Öffentliche Filterbeschreibung',
	'abusefilter-history-flags'                             => 'Flags',
	'abusefilter-history-filter'                            => 'Filterregel',
	'abusefilter-history-comments'                          => 'Kommentare',
	'abusefilter-history-actions'                           => 'Aktionen',
	'abusefilter-history-backedit'                          => 'Zurück zur Filtereditor',
	'abusefilter-history-backlist'                          => 'Zurück zur Filterliste',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'abusefilter-desc'                         => 'Nałožujo awtomatisku heuristiku na změny.',
	'abusefilter'                              => 'Konfiguracija filtra znjewužywanja',
	'abuselog'                                 => 'Protokol znjewužywanjow',
	'abusefilter-blocker'                      => 'Filter znjewužywanja',
	'abusefilter-blockreason'                  => 'Awtomatiski pśez filter znjewužywanja blokěrowany. Wopisanje pšawidła: $1',
	'abusefilter-degroupreason'                => 'Pšawa awtomatiski pśez fitler znjewužywanja zajmjone. Wopisanje pšawidła: $1',
	'abusefilter-accountreserved'              => 'Toś to kontowe mě jo za wužywanje pśez filter znjewužywanja wuměnjone.',
	'right-abusefilter-modify'                 => 'Filtry znjewužywanja změniś',
	'right-abusefilter-view'                   => 'Filtry znjewužywanja zwobrazniś',
	'right-abusefilter-log'                    => 'Protokol znjewužywanjow zwobrazniś',
	'right-abusefilter-log-detail'             => 'Detailěrowane zapiski protokola znjewužywanjow zwbrazniś',
	'right-abusefilter-private'                => 'Priwatne daty w protokolu znjewužywanjow zwobrazniś',
	'abusefilter-log'                          => 'Protokol filtrow znjewužywanja',
	'abusefilter-log-search'                   => 'Protokol znjewužywanjow pytaś',
	'abusefilter-log-search-user'              => 'Wužywaŕ:',
	'abusefilter-log-search-filter'            => 'ID filtra:',
	'abusefilter-log-search-title'             => 'Titel:',
	'abusefilter-log-search-submit'            => 'Pytaś',
	'abusefilter-log-entry'                    => '$1: $2 jo filter znjewužywanja zapušćił a $3 na $4 cynił. Wuwjeźone akcije: $5; Wopisanje filtra: $6',
	'abusefilter-log-detailedentry'            => '$1: $2 jo filter $3 zapušćił a $4 na $5 cynił. Wuwjeźone akcije: $6. Wopisanje filtra: $7 ($8)',
	'abusefilter-log-detailslink'              => 'Drobnosći',
	'abusefilter-log-details-legend'           => 'Drobnosći za protokolowy zapisk $1',
	'abusefilter-log-details-var'              => 'Wariabla',
	'abusefilter-log-details-val'              => 'Gódnota',
	'abusefilter-log-details-vars'             => 'Akcijne parametry',
	'abusefilter-log-details-private'          => 'Priwatne daty',
	'abusefilter-log-details-ip'               => 'Wuchadna adresa IP',
	'abusefilter-log-noactions'                => 'žeden',
	'abusefilter-management'                   => 'Zastojanje filtrow znjewužywanja',
	'abusefilter-list'                         => 'Wše filtry',
	'abusefilter-list-id'                      => 'ID filtra',
	'abusefilter-list-status'                  => 'Status',
	'abusefilter-list-public'                  => 'Zjawne wopisanje',
	'abusefilter-list-consequences'            => 'Konsekwence',
	'abusefilter-list-visibility'              => 'Widobnosć',
	'abusefilter-list-hitcount'                => 'Trjefarje licyś',
	'abusefilter-list-edit'                    => 'Wobźěłaś',
	'abusefilter-list-details'                 => 'Drobnosći',
	'abusefilter-hidden'                       => 'Priwatny',
	'abusefilter-unhidden'                     => 'Zjawny',
	'abusefilter-enabled'                      => 'Zmóžnjony',
	'abusefilter-disabled'                     => 'Znjemóžnjony',
	'abusefilter-hitcount'                     => '$1 {{PLURAL:$1|trjefaŕ|trjefarja|trjefarje|trjefarjow}}',
	'abusefilter-list-new'                     => 'Nowy filter',
	'abusefilter-edit-subtitle'                => 'Filter $1 se wobźěłujo',
	'abusefilter-edit-new'                     => 'Nowy filter',
	'abusefilter-edit-save'                    => 'Filter składowaś',
	'abusefilter-edit-id'                      => 'ID filtra:',
	'abusefilter-edit-description'             => "Wopisanje:
:''(zjawnje widobne)''",
	'abusefilter-edit-flags'                   => 'Wobznamjenja:',
	'abusefilter-edit-enabled'                 => 'Toś ten filter zmóžniś',
	'abusefilter-edit-hidden'                  => 'Drobnosći toś togo filtra pśed zjawnym zwobraznjenim schowaś',
	'abusefilter-edit-rules'                   => 'Sajźba pšawidłow:',
	'abusefilter-edit-notes'                   => "Pśipomnjeś:
:'' (priwatny)",
	'abusefilter-edit-lastmod'                 => 'filter slědny raz změnjony:',
	'abusefilter-edit-lastuser'                => 'Slědny wužywaŕ, kótaryž toś ten filter wobźěłał:',
	'abusefilter-edit-hitcount'                => 'Licba filtrowych trefarjow:',
	'abusefilter-edit-consequences'            => 'Akcije wuwjeźone pśi trjefarju',
	'abusefilter-edit-action-warn'             => 'Toś te akcije pó warnowanju do wužiwarja zapušćiś',
	'abusefilter-edit-action-disallow'         => 'Akciju zakazaś',
	'abusefilter-edit-action-flag'             => 'Změnu w protokolu znjewužywanjow wobznamjeniś',
	'abusefilter-edit-action-blockautopromote' => 'Wužywarjeju awtomatiski wobkšuśony status zajmjeś',
	'abusefilter-edit-action-degroup'          => 'Wužywarja ze wšych priwilegěrowanych kupkow wótwónoźeś',
	'abusefilter-edit-action-block'            => 'Wobźełanje pśez wužywarja blokěrowaś',
	'abusefilter-edit-action-throttle'         => 'Akcije jano zapušćiś, jolic wužywaŕ pśekšaca progowy gódnotu',
	'abusefilter-edit-throttle-count'          => 'Licba dowólonych akcijow:',
	'abusefilter-edit-throttle-period'         => 'Casowy interwal:',
	'abusefilter-edit-throttle-seconds'        => '$1 {{PLURAL:$1|sekunda|sekunźe|sekundy|sekundow}}',
	'abusefilter-edit-throttle-groups'         => "Wobgranicowanje spěšnosći wobźěłanja kupki pśez:
:''(jadna na smužku, někotare z komami)''",
	'abusefilter-edit-denied'                  => 'Njamóžośo drobnosći toś togo filtra wiźeś, dokulaž jo pśed zjawneym zwobranjenim schowany.',
	'abusefilter-edit-main'                    => 'Filtrowe parametry',
	'abusefilter-edit-done-subtitle'           => 'Filter wobźěłany',
	'abusefilter-edit-done'                    => 'Sy swóje změny na filtrach wuspěšnje składł.

[[Special:AbuseFilter|Slědk]]',
);

/** Greek (Ελληνικά)
 * @author Consta
 */
$messages['el'] = array(
	'abusefilter-log-search-user'           => 'Χρήστης:',
	'abusefilter-log-search-title'          => 'Τίτλος:',
	'abusefilter-log-search-submit'         => 'Αναζήτηση',
	'abusefilter-log-detailslink'           => 'λεπτομέρειες',
	'abusefilter-list-details'              => 'Λεπτομέρειες',
	'abusefilter-tools-modifiertest-submit' => 'Δοκιμή',
	'abusefilter-tools-subtitle'            => 'Εργαλεία',
	'abusefilter-edit-status-label'         => 'Στατιστικά',
	'abusefilter-edit-rules'                => 'Συνθήκες:',
	'abusefilter-edit-throttle-seconds'     => '$1 δευτερόλεπτα',
	'abusefilter-history-user'              => 'Χρήστης',
	'abusefilter-history-comments'          => 'Σχόλια',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'abusefilter-desc'                      => 'Aplikas aŭtomatan heŭristikon al redaktoj.',
	'abusefilter'                           => 'Konfiguri filtrilon de misuzado',
	'abuselog'                              => 'Protokolo pri misuzado',
	'abusefilter-warning'                   => "<big>'''Averto'''</big>: Ĉi tiu ago estis aŭtomate identigita kiel misuzema.
Malkonstruktivaj redaktoj rapide estos malfaritaj,
kaj ĉi tia ega aŭ ripetita redaktado rezultos, ke via konto aŭ komputilo estos forbarita.
Se vi kredas ke ĉi tiu redakto estas ja konstruktiva, vi povas klaki Konservi denove por konfirmi ĝin.
Mallonga priskribo pri la regulo de misuzo kiun via ago kongruis estas: $1",
	'abusefilter-disallowed'                => 'Ĉi tiu ago estis aŭtomate identigita kiel damaĝa, kaj do estis malpermesita.
Se vi kredas ke via redakto estis utila, bonvolu kontakti administranton, kaj informi ilin pri kion vi volis fari.
Mallonga priskribo de la misuza regulo kiun via ago kongruis estas: $1',
	'abusefilter-blocker'                   => 'Filtrilo de misuzo',
	'abusefilter-blockreason'               => 'Aŭtomate blokita de la misuzada filtrilo. Regula priskribo: $1',
	'abusefilter-accountreserved'           => 'Ĉi tiu konta nomo estas rezervita por uzo de la misuzada filtrilo.',
	'right-abusefilter-modify'              => 'Modifi filtrilojn de misuzo',
	'right-abusefilter-view'                => 'Rigardi filtrilojn de misuzo',
	'right-abusefilter-log'                 => 'Rigardi la protokolon de misuzo',
	'right-abusefilter-log-detail'          => 'Rigardi detalojn en la protokolo de misuzo',
	'right-abusefilter-private'             => 'Rigardi privatajn datenojn en la protokolo de misuzo',
	'abusefilter-log'                       => 'Protokolo pri Filtrilo de Misuzo',
	'abusefilter-log-search'                => 'Serĉi la protokolon de misuzo',
	'abusefilter-log-search-user'           => 'Uzanto',
	'abusefilter-log-search-filter'         => 'Identigo de filtrilo:',
	'abusefilter-log-search-title'          => 'Titolo:',
	'abusefilter-log-search-submit'         => 'Serĉi',
	'abusefilter-log-detailslink'           => 'detaloj',
	'abusefilter-log-details-legend'        => 'Detaloj por protokola listano $1',
	'abusefilter-log-details-var'           => 'Variablo',
	'abusefilter-log-details-val'           => 'Valuto',
	'abusefilter-log-details-vars'          => 'Parametroj de ago',
	'abusefilter-log-details-private'       => 'Privataj datenoj',
	'abusefilter-log-details-ip'            => 'Originala IP-adreso',
	'abusefilter-log-noactions'             => 'neniu',
	'abusefilter-management'                => 'Administrado de filtriloj de misuzo',
	'abusefilter-list'                      => 'Ĉiuj filtriloj',
	'abusefilter-list-id'                   => 'Identigo de Filtrilo',
	'abusefilter-list-status'               => 'Statuso',
	'abusefilter-list-public'               => 'Publika priskribo',
	'abusefilter-list-consequences'         => 'Konsekvencoj',
	'abusefilter-list-visibility'           => 'Videbleco',
	'abusefilter-list-edit'                 => 'Redakti',
	'abusefilter-list-details'              => 'Detaloj',
	'abusefilter-hidden'                    => 'Privata',
	'abusefilter-unhidden'                  => 'Publika',
	'abusefilter-enabled'                   => 'Ebligita',
	'abusefilter-disabled'                  => 'Malebligita',
	'abusefilter-hitcount'                  => '$1 {{PLURAL:$1|trovo|trovoj}}',
	'abusefilter-list-new'                  => 'Nova filtrilo',
	'abusefilter-tools-modifiertest-submit' => 'Testo',
	'abusefilter-edit-subtitle'             => 'Redaktis filtrilon $1',
	'abusefilter-edit-status-label'         => 'Statistikoj',
	'abusefilter-edit-throttled'            => "'''Averto''': Ĉi tiu filtrilo aŭtomate malebligiĝis pro sekureco. Ĝi atingis la limo kontruanta pli ol $1% de agoj.",
	'abusefilter-edit-new'                  => 'Nova filtrilo',
	'abusefilter-edit-save'                 => 'Konservi filtrilon',
	'abusefilter-edit-id'                   => 'Identigo de filtrilo:',
	'abusefilter-edit-description'          => "Priskribo:
:''(publike videbla)''",
	'abusefilter-edit-enabled'              => 'Ebligi ĉi tiun filtrilon',
	'abusefilter-edit-hidden'               => 'Kaŝi detalojn pri ĉi tiu filtrilo de publika vido',
	'abusefilter-edit-rules'                => 'Regularo:',
	'abusefilter-edit-notes'                => "Notoj:
:''(privata)",
	'abusefilter-edit-lastmod'              => 'Filtri laste modifitajn:',
	'abusefilter-edit-lastuser'             => 'Lasta uzanto modifanta ĉi tiun filtrilon:',
	'abusefilter-edit-action-disallow'      => 'Malpermesi la agon',
	'abusefilter-edit-action-block'         => 'Forbari la uzanton de redaktado',
	'abusefilter-edit-throttle-count'       => 'Nombro de agoj por permisigi',
	'abusefilter-edit-throttle-period'      => 'Tempdaŭro:',
	'abusefilter-edit-throttle-seconds'     => '$1 sekundoj',
	'abusefilter-edit-denied'               => 'Vi ne rajtas vidi detalojn pri ĉi tiu filtrilo, ĉar ĝi estas kaŝita de publika vido',
	'abusefilter-edit-main'                 => 'Filtraj parametroj',
	'abusefilter-edit-done-subtitle'        => 'Filtrilo redaktita',
	'abusefilter-edit-done'                 => 'Vi sukcese konservis viajn ŝanĝojn al la filtrilo.

[[Special:AbuseFilter|Reiri]]',
);

/** French (Français)
 * @author Grondin
 * @author McDutchie
 * @author IAlex
 */
$messages['fr'] = array(
	'abusefilter-desc'                                      => 'Applique des heuristiques automatiques aux modifications',
	'abusefilter'                                           => 'Configuration du filtre des abus',
	'abuselog'                                              => 'Journal des abus',
	'abusefilter-warning'                                   => "<big>'''Avertissement'''</big> : Cette action a été identifiée automatiquement comme nuisible.
Les éditions non constructives seront rapidement annulée,
et la répétition des âneries du même genre provoquera le blocage de votre compte.
Si vous être convaincu que votre modification est constructive, vous pouvez la soumettre une nouvelle fois pour la valider.
Voici description brève de la règle de l’abus qui a détecté votre action : $1",
	'abusefilter-disallowed'                                => 'Cette modification a été automatiquement idenfiée comme nuisible et, par voie de conséquence, non permise. Si vous êtes convaicu que votre modification était constructive, veuillez contacter un administrateur, et informez le de quelle action vous êtiez en train de faire : $1',
	'abusefilter-blocked-display'                           => 'Cette action a été automatiquement identifée comme nuisible, et vous avez déjà été empêché de l’exécuter.
En conséquence, pour protéger {{SITENAME}}, votre compte utilisateur et toutes les adresses IP associées ont été bloqués en écriture.
Si ceci est dû à une erreur, veuillez contacter un administrateur.
Voici la courte description de la règle de l’abus qui a détecté votre action : $1',
	'abusefilter-degrouped'                                 => 'Cette action a été automatiquement identifiée comme nuisible.
En conséquence, elle a été non permise, dès lors, votre compte est suspecté de compromission, tous vos droits ont été enlevés.
Si vous êtes convaincu que cela est dû à une erreur, veuillez contacter un bureaucrate avec une explication de cette action, et tous vos droits pourront être rétablis.
Voici la courte description de la règle de l’abus qui a détecté votre action : $1',
	'abusefilter-autopromote-blocked'                       => 'Cette action a été automatiquement identifié comme nuisible, et elle a été non permise.
En conséquence, à titre de mesure de sécurité, quelques privilèges accordés d’habitude pour les comptes établis ont été révoqués temporairement de votre compte.
Une brève description de la règle d’abus que votre action a déclenchée est : $1',
	'abusefilter-blocker'                                   => 'Filtre des abus',
	'abusefilter-blockreason'                               => 'Bloqué automatiquement pour avoir tenté d’avoir fait des modifications identifiées comme nuisibles. Description de la règle : $1',
	'abusefilter-degroupreason'                             => 'Droits automatiquement retirés par le filtre des abus. Description de la règle : $1',
	'abusefilter-accountreserved'                           => 'Le nom de ce compte est révervé pour l’usage par le filtre des abus.',
	'right-abusefilter-modify'                              => 'Modifier les filtres des abus',
	'right-abusefilter-view'                                => 'Voir les filtres des abus',
	'right-abusefilter-log'                                 => 'Voir le journal des abus',
	'right-abusefilter-log-detail'                          => 'Voir les entrées du journal détaillé des abus',
	'right-abusefilter-private'                             => 'Voir les données privées dans le journal des abus',
	'abusefilter-log'                                       => 'Journal du filtre des abus',
	'abusefilter-log-search'                                => 'Rechercher le journal des abus',
	'abusefilter-log-search-user'                           => 'Utilisateur :',
	'abusefilter-log-search-filter'                         => 'Filtre ID :',
	'abusefilter-log-search-title'                          => 'Titre :',
	'abusefilter-log-search-submit'                         => 'Rechercher',
	'abusefilter-log-entry'                                 => '$1 : $2 a déclenché un filtre des abus, faisant un $3 sur $4. Actions prises : $5 ; Description du filtre : $6',
	'abusefilter-log-detailedentry'                         => '$1 : $2 a déclenché le filtre $3 des abus, faisant un $4 sur $5. Actions prises : $6 ; Description du filtre : $7 ($8)',
	'abusefilter-log-detailslink'                           => 'détails',
	'abusefilter-log-details-legend'                        => "Détails pour l'entrée $1 du journal",
	'abusefilter-log-details-var'                           => 'Variable',
	'abusefilter-log-details-val'                           => 'Valeur',
	'abusefilter-log-details-vars'                          => 'Paramètres de l’action',
	'abusefilter-log-details-private'                       => 'Donnée privée',
	'abusefilter-log-details-ip'                            => 'Provenance de l’adresse IP',
	'abusefilter-log-noactions'                             => 'néant',
	'abusefilter-management'                                => 'Gestion du filtre des abus',
	'abusefilter-list'                                      => 'Tous les filtres',
	'abusefilter-list-id'                                   => 'Filtre ID',
	'abusefilter-list-status'                               => 'Statut',
	'abusefilter-list-public'                               => 'Description publique',
	'abusefilter-list-consequences'                         => 'Conséquences',
	'abusefilter-list-visibility'                           => 'Visibilité',
	'abusefilter-list-hitcount'                             => 'Compte des accès',
	'abusefilter-list-edit'                                 => 'Modifier',
	'abusefilter-list-details'                              => 'Détails',
	'abusefilter-hidden'                                    => 'Privé',
	'abusefilter-unhidden'                                  => 'Public',
	'abusefilter-enabled'                                   => 'Activé',
	'abusefilter-disabled'                                  => 'Désactivé',
	'abusefilter-hitcount'                                  => '$1 {{PLURAL:$1|visite|visites}}',
	'abusefilter-list-new'                                  => 'Nouveau filtre',
	'abusefilter-tools-modifiertest-submit'                 => 'Test',
	'abusefilter-tools'                                     => 'Quelques [[Special:AbuseFilter/tools|outils]] sont disponibles pour aider à la formulation et au déboggage des filtres des abus.',
	'abusefilter-tools-subtitle'                            => 'Outils',
	'abusefilter-tools-text'                                => 'Voici quelques outils qui peuvent être utiles dans la formulation ou le déboggage des filtres d’abus. [[Special:AbuseFilter|Retour au menu principal]]',
	'abusefilter-tools-expr'                                => "Test d'expression",
	'abusefilter-tools-submitexpr'                          => 'Evaluer',
	'abusefilter-status'                                    => '{{PLURAL:$1|De la dernière action|des $1 dernières actions}}, $2 ($3 %) {{PLURAL:$2|a|ont}} atteint la limite de la condition définie par $4. $5 ($6 %) {{PLURAL:$5|correspondait|correspondaient}} à l’un de ces filtres actuellement en service.',
	'abusefilter-edit-subtitle'                             => 'Modification du filtre $1',
	'abusefilter-edit-status-label'                         => 'Statistiques',
	'abusefilter-edit-status'                               => '{{PLURAL:$1|De la dernière action|des $1 dernières actions}}, ce filtre a atteint $2 ($3 %).',
	'abusefilter-edit-throttled'                            => "'''Avertissement''' : Ce filtre a été désactivé automatiquement par mesure de sécurité. Il a atteint la limite de correspondance à plus de $1 % des actions.",
	'abusefilter-edit-new'                                  => 'Nouveau filtre',
	'abusefilter-edit-save'                                 => 'Sauvegarder le filtre',
	'abusefilter-edit-id'                                   => 'Filtre ID :',
	'abusefilter-edit-description'                          => "Description :
:''(Visible publiquement)''",
	'abusefilter-edit-flags'                                => 'Drapeaux :',
	'abusefilter-edit-enabled'                              => 'Activer ce filtre',
	'abusefilter-edit-hidden'                               => 'Cacher les détails de ce filtre à la vue publique',
	'abusefilter-edit-rules'                                => 'Conditions :',
	'abusefilter-edit-notes'                                => "Notes :
:''(privé)''",
	'abusefilter-edit-lastmod'                              => 'Filtre modifié en dernier :',
	'abusefilter-edit-lastuser'                             => 'Dernier utilisateur ayant modifié ce filtre :',
	'abusefilter-edit-hitcount'                             => 'Visites du filtre :',
	'abusefilter-edit-consequences'                         => 'Actions entreprises lors de la visite',
	'abusefilter-edit-action-warn'                          => 'Déclencher ces actions après avoir donné un avertissement à l’utilisateur',
	'abusefilter-edit-action-disallow'                      => 'Ne pas permettre à l’utilisateur d’effectuer l’action en question',
	'abusefilter-edit-action-flag'                          => 'Marquer la modification dans le journal des abus',
	'abusefilter-edit-action-blockautopromote'              => 'Révoquer le status de compte automatiquement confirmé de l’utilisateur',
	'abusefilter-edit-action-degroup'                       => 'Retirer à l’utilisateur tous les groupes privilégiés',
	'abusefilter-edit-action-block'                         => 'Bloquer l’utilisateur et/ou l’adresse IP en écriture',
	'abusefilter-edit-action-throttle'                      => 'Déclencher les actions uniquement si l’utilisateur a dépassé les limites',
	'abusefilter-edit-throttle-count'                       => 'Nombre d’actions à autoriser :',
	'abusefilter-edit-throttle-period'                      => 'Laps de temps :',
	'abusefilter-edit-throttle-seconds'                     => '$1 secondes',
	'abusefilter-edit-throttle-groups'                      => "Group détenu par :
:''(un par ligne, séparé par des virgules)''",
	'abusefilter-edit-denied'                               => 'Vous ne pouvez pas voir les détails de ce filtre parce qu’il est caché à la vue du public',
	'abusefilter-edit-main'                                 => 'Paramètres du filtre',
	'abusefilter-edit-done-subtitle'                        => 'Filtre modifié',
	'abusefilter-edit-done'                                 => 'Vous avez sauvegardé vos modifications avec succès dans le filtre.

[[Special:AbuseFilter|Retour]]',
	'abusefilter-edit-badsyntax'                            => 'Il y a une erreur de syntaxe dans le filtre que vous avez spécifié. Le résultat du parseur était : <pre>$1</pre>',
	'abusefilter-edit-viewhistory'                          => 'Voir l’historique de ce filtre',
	'abusefilter-edit-history'                              => 'Historique',
	'abusefilter-edit-check'                                => 'Vérifier la syntaxe',
	'abusefilter-edit-builder-select'                       => 'Sélectionner une option pour l’ajouter vers le curseur',
	'abusefilter-edit-builder-group-op-arithmetic'          => 'Opérateurs arithmétiques',
	'abusefilter-edit-builder-op-arithmetic-addition'       => 'Addition (+)',
	'abusefilter-edit-builder-op-arithmetic-subtraction'    => 'Soustraction (-)',
	'abusefilter-edit-builder-op-arithmetic-multiplication' => 'Multiplication (*)',
	'abusefilter-edit-builder-op-arithmetic-divide'         => 'Division (/)',
	'abusefilter-edit-builder-op-arithmetic-modulo'         => 'Modulo (%)',
	'abusefilter-edit-builder-op-arithmetic-pow'            => 'Puissance (**)',
	'abusefilter-edit-builder-group-op-comparison'          => 'Opérateurs de comparaison',
	'abusefilter-edit-builder-op-comparison-equal'          => 'Égal à (==)',
	'abusefilter-edit-builder-op-comparison-notequal'       => 'Différent de (!=)',
	'abusefilter-edit-builder-op-comparison-lt'             => 'Inférieur à (<)',
	'abusefilter-edit-builder-op-comparison-gt'             => 'Supérieur à (>)',
	'abusefilter-edit-builder-op-comparison-lte'            => 'Inférieur ou égal à (<=)',
	'abusefilter-edit-builder-op-comparison-gte'            => 'Supérieur ou égal à (>=)',
	'abusefilter-edit-builder-group-op-bool'                => 'Opérateurs booléens',
	'abusefilter-edit-builder-op-bool-not'                  => 'Non (!)',
	'abusefilter-edit-builder-op-bool-and'                  => 'Et (&)',
	'abusefilter-edit-builder-op-bool-or'                   => 'Ou (|)',
	'abusefilter-edit-builder-group-misc'                   => 'Divers',
	'abusefilter-edit-builder-misc-ternary'                 => 'Opérateur ternaire (1 ? 2 : 3)',
	'abusefilter-edit-builder-misc-in'                      => 'contenu dans la chaîne de caractères (in)',
	'abusefilter-edit-builder-misc-like'                    => 'Contient l’expression régulière (like)',
	'abusefilter-edit-builder-group-funcs'                  => 'Fonctions',
	'abusefilter-edit-builder-funcs-length'                 => 'Longueur de la chaîne de caractères (length)',
	'abusefilter-edit-builder-funcs-lcase'                  => 'Vers les caractères minuscules (lcase)',
	'abusefilter-edit-builder-funcs-ccnorm'                 => 'Normalise les caractères prêtant à confusion (ccnorm)',
	'abusefilter-edit-builder-funcs-rmdoubles'              => 'Enlève les caractères doubles (rmdoubles)',
	'abusefilter-edit-builder-funcs-specialratio'           => 'Caractères spéciaux / Total des caractères (specialratio)',
	'abusefilter-edit-builder-funcs-norm'                   => 'Normalise (norm)',
	'abusefilter-edit-builder-funcs-count'                  => 'Nombre de fois que la chaîne de caractères X apparaît dans la chaîne Y (count)',
	'abusefilter-edit-builder-group-vars'                   => 'Variables',
	'abusefilter-edit-builder-vars-accountname'             => 'Nom du compte (lors de la création du compte)',
	'abusefilter-edit-builder-vars-action'                  => 'Action',
	'abusefilter-edit-builder-vars-addedlines'              => 'Lignes ajoutées lors de la modification',
	'abusefilter-edit-builder-vars-delta'                   => 'Taille modifiée lors de la modification',
	'abusefilter-edit-builder-vars-diff'                    => 'Diffs unifiés des changements faits lors de la modification',
	'abusefilter-edit-builder-vars-newsize'                 => 'Taille de la nouvelle page',
	'abusefilter-edit-builder-vars-oldsize'                 => 'Taille de l’ancienne page',
	'abusefilter-edit-builder-vars-removedlines'            => 'Lignes supprimées lors de la modification',
	'abusefilter-edit-builder-vars-summary'                 => 'Sommaire, motif de la modification',
	'abusefilter-edit-builder-vars-article-id'              => 'ID de l’article',
	'abusefilter-edit-builder-vars-article-ns'              => 'Nom d’espace de la page',
	'abusefilter-edit-builder-vars-article-text'            => 'Titre de la page (sans le nom de l’espace)',
	'abusefilter-edit-builder-vars-article-prefixedtext'    => 'Article de l’article entier',
	'abusefilter-edit-builder-vars-movedfrom-id'            => 'ID de l‘article du renommage de la page d’origine',
	'abusefilter-edit-builder-vars-movedfrom-ns'            => 'Nom d’espace de nommage du renommage de la page d’origine.',
	'abusefilter-edit-builder-vars-movedfrom-text'          => 'Titre du déplacement de la page d’origine',
	'abusefilter-edit-builder-vars-movedfrom-prefixedtext'  => 'Titre entier de la page d’origine',
	'abusefilter-edit-builder-vars-movedto-id'              => 'ID de l’article du renommage de la page de destination',
	'abusefilter-edit-builder-vars-movedto-ns'              => 'Nom de l’espace de nom du renommage de la page de destination',
	'abusefilter-edit-builder-vars-movedto-text'            => 'Titire du renommage de la page de destination',
	'abusefilter-edit-builder-vars-movedto-prefixedtext'    => 'Titre entier du renommage de la page de destination',
	'abusefilter-edit-builder-vars-user-editcount'          => 'Compteur d’édition de l’utilisateur',
	'abusefilter-edit-builder-vars-user-age'                => 'Âge du compte utilisateur',
	'abusefilter-edit-builder-vars-user-name'               => 'Nom du compte utilisateur',
	'abusefilter-edit-builder-vars-user-groups'             => 'Groupes (incluant ceux qui sont implicites) de l‘utilisateur dans',
	'abusefilter-edit-builder-vars-user-emailconfirm'       => 'L’adresse du courriel de l’heure du courriel a été confirmée',
	'abusefilter-history'                                   => 'Historique du filtre $1',
	'abusefilter-history-hidden'                            => 'caché',
	'abusefilter-history-enabled'                           => 'activé',
	'abusefilter-history-timestamp'                         => 'Heure',
	'abusefilter-history-user'                              => 'Utilisateur',
	'abusefilter-history-public'                            => 'Description publique du filtre',
	'abusefilter-history-flags'                             => 'Drapeaux',
	'abusefilter-history-filter'                            => 'Règle du filtre',
	'abusefilter-history-comments'                          => 'Commentaire',
	'abusefilter-history-actions'                           => 'Actions',
	'abusefilter-history-backedit'                          => 'Retour à l’édition du filtre',
	'abusefilter-history-backlist'                          => 'Retour à la liste des filtres',
);

/** Western Frisian (Frysk)
 * @author Pyt
 * @author Snakesteuben
 */
$messages['fy'] = array(
	'abusefilter-desc'              => 'Fiert automatyske heuristyske analyse út op bewurkings',
	'abusefilter'                   => 'Misbrûkfilterkonfiguraasje',
	'abusefilter-log-search-submit' => 'Sykje',
	'abusefilter-log-noactions'     => 'gjin',
	'abusefilter-list-edit'         => 'Wizigje',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'abusefilter-desc'                         => 'Aplica heurísticas automáticas ás edicións.',
	'abusefilter'                              => 'Configuración do filtro de abusos',
	'abuselog'                                 => 'Rexistro de abusos',
	'abusefilter-warning'                      => "<big>'''Atención:'''</big> esta acción foi identificada automaticamente como dañina.
As edicións non construtivas serán revertidas rapidamente,
e a repetición destas edicións dará como resultado o bloqueo da súa conta ou do seu computador.
Se cre que esta edición é construtiva, pode premer outra vez en \"Enviar\" para confirmalo.
Unha breve descrición da regra de abuso coa que a súa acción coincide é: \$1",
	'abusefilter-disallowed'                   => 'Esta acción foi identificada automaticamente como dañina
e por iso non está permitida.
Se cre que a súa edición foi construtiva, por favor, contacte cun administrador e infórmelle do que estaba intentando facer.
Unha breve descrición da regra de abuso coa que a súa acción coincide é: $1',
	'abusefilter-blocked-display'              => 'Esta acción foi identificada automaticamente como dañina
e impedíuselle que a executase.
Ademais, para protexer a {{SITENAME}}, a súa conta de usuario e todos os enderezos IP asociados foron bloqueados fronte á edición.
Se isto ocorreu por erro, por favor, contacte cun administrador.
Unha breve descrición da regra de abuso coa que a súa acción coincide é: $1',
	'abusefilter-degrouped'                    => 'Esta acción foi identificada automaticamente como dañina.
Como consecuencia, non está perminita e, desde que se sospeita que a súa conta está comprometida, todos os seus dereitos foron revogados.
Se cre que isto foi un erro, por favor, contacte cun burócrata cunha explicación desta acción e os seus dereitos serán restaurados.
Unha breve descrición da regra de abuso coa que a súa acción coincide é: $1',
	'abusefilter-autopromote-blocked'          => 'Esta acción foi identificada automaticamente como dañina e non está permitida.
Ademais, como medida de seguridade, fóronlle revogados temporalmente da súa conta algúns privilexios que habitualmente son concedidos ás contas establecidas.
Unha breve descrición da regra de abuso coa que a súa acción coincide é: $1',
	'abusefilter-blocker'                      => 'Filtro de abusos',
	'abusefilter-blockreason'                  => 'Bloqueado automaticamente polo filtro de abusos. Descrición da regra: $1',
	'abusefilter-degroupreason'                => 'Os dereitos foron retirados automaticamente polo filtro de abusos. Descrición da regra: $1',
	'abusefilter-accountreserved'              => 'Este nome de conta está reservado para ser usado polo filtro de abusos.',
	'right-abusefilter-modify'                 => 'Modificar os filtros de abuso',
	'right-abusefilter-view'                   => 'Ver os filtros de abuso',
	'right-abusefilter-log'                    => 'Ver o rexistro de abusos',
	'right-abusefilter-log-detail'             => 'Ver os detalles das entradas do rexistro de abusos',
	'right-abusefilter-private'                => 'Ver os datos privados no rexistro de abusos',
	'abusefilter-log'                          => 'Rexistro do filtro de abusos',
	'abusefilter-log-search'                   => 'Procurar o rexistro de abuso',
	'abusefilter-log-search-user'              => 'Usuario:',
	'abusefilter-log-search-filter'            => 'Filtrar o ID:',
	'abusefilter-log-search-title'             => 'Título:',
	'abusefilter-log-search-submit'            => 'Procurar',
	'abusefilter-log-entry'                    => '$1: $2 accionou o filtro de abusos, facendo un $3 en $4. Accións levadas a cabo: $5; descrición do filtro: $6',
	'abusefilter-log-detailedentry'            => '$1: $2 accionou o filtro $3, facendo un $4 en $5. Accións levadas a cabo: $6; descrición do filtro: $7 ($8)',
	'abusefilter-log-detailslink'              => 'detalles',
	'abusefilter-log-details-legend'           => 'Detalles para a entrada $1 do rexistro',
	'abusefilter-log-details-var'              => 'Variable',
	'abusefilter-log-details-val'              => 'Valor',
	'abusefilter-log-details-vars'             => 'Parámetros de acción',
	'abusefilter-log-details-private'          => 'Datos privados',
	'abusefilter-log-details-ip'               => 'Enderezo IP de orixe',
	'abusefilter-log-noactions'                => 'ningunha',
	'abusefilter-management'                   => 'Xestión do filtro de abusos',
	'abusefilter-list'                         => 'Todos os filtros',
	'abusefilter-list-id'                      => 'Filtrar o ID',
	'abusefilter-list-status'                  => 'Status',
	'abusefilter-list-public'                  => 'Descrición pública',
	'abusefilter-list-consequences'            => 'Consecuencias',
	'abusefilter-list-visibility'              => 'Visibilidade',
	'abusefilter-list-hitcount'                => 'Contador de visitas',
	'abusefilter-list-edit'                    => 'Editar',
	'abusefilter-list-details'                 => 'Detalles',
	'abusefilter-hidden'                       => 'Privado',
	'abusefilter-unhidden'                     => 'Público',
	'abusefilter-enabled'                      => 'Permitido',
	'abusefilter-disabled'                     => 'Non permitido',
	'abusefilter-hitcount'                     => '$1 {{PLURAL:$1|visita|visitas}}',
	'abusefilter-list-new'                     => 'Novo filtro',
	'abusefilter-tools-modifiertest-submit'    => 'Proba',
	'abusefilter-tools'                        => 'Están dispoñibles algunhas [[Special:AbuseFilter/tools|ferramentas]] para axudar a formular e depurar filtros de abuso.',
	'abusefilter-status'                       => 'Das $1 últimas accións, $2 ($3%) acadaron o condición límite de $4. $5 ($6%) coincidiron cun dos filtros permitidos actualmente.',
	'abusefilter-edit-subtitle'                => 'Editando o filtro $1',
	'abusefilter-edit-status-label'            => 'Estatísticas',
	'abusefilter-edit-status'                  => 'Das $1 últimas accións, este filtro coincidiu con $2 ($3%).',
	'abusefilter-edit-throttled'               => "'''Aviso:''' este filtro foi deshabilitado automaticamente como unha medida de seguridade. Alcanzouse o límite de  máis de $1% de coincidencias de accións.",
	'abusefilter-edit-new'                     => 'Novo filtro',
	'abusefilter-edit-save'                    => 'Gardar o filtro',
	'abusefilter-edit-id'                      => 'Filtrar o ID:',
	'abusefilter-edit-description'             => "Descrición:
:''(visible publicamente)''",
	'abusefilter-edit-flags'                   => 'Revisións:',
	'abusefilter-edit-enabled'                 => 'Permitir este filtro',
	'abusefilter-edit-hidden'                  => 'Agochar os detalles deste filtro da vista pública',
	'abusefilter-edit-rules'                   => 'Parámetros das regras:',
	'abusefilter-edit-notes'                   => "Notas:
:''(privado)''",
	'abusefilter-edit-lastmod'                 => 'O filtro foi modificado por última vez:',
	'abusefilter-edit-lastuser'                => 'Último usuario que modificou este filtro:',
	'abusefilter-edit-hitcount'                => 'Visitas do filtro:',
	'abusefilter-edit-consequences'            => 'Accións levadas a cabo nel',
	'abusefilter-edit-action-warn'             => 'Accionar estas accións despois de darlle ao usuario un aviso',
	'abusefilter-edit-action-disallow'         => 'Non permitir a acción',
	'abusefilter-edit-action-flag'             => 'Revisar a edición no rexistro de abusos',
	'abusefilter-edit-action-blockautopromote' => 'Revogar o status de usuario autoconfirmado',
	'abusefilter-edit-action-degroup'          => 'Eliminar todos os grupos de privilexios dun usuario',
	'abusefilter-edit-action-block'            => 'Bloquear este usuario fronte á edición',
	'abusefilter-edit-action-throttle'         => 'Accionar as accións só se o usuario se salta un límite',
	'abusefilter-edit-throttle-count'          => 'Número de accións a permitir:',
	'abusefilter-edit-throttle-period'         => 'Período de tempo:',
	'abusefilter-edit-throttle-seconds'        => '$1 segundos',
	'abusefilter-edit-throttle-groups'         => "Grupo acelerado por:
:''(un por liña, combinar con comas)''",
	'abusefilter-edit-denied'                  => 'Non pode ver os detalles deste filtro porque está agochado da vista pública',
	'abusefilter-edit-main'                    => 'Parámetros do filtro',
	'abusefilter-edit-done-subtitle'           => 'Filtro editado',
	'abusefilter-edit-done'                    => 'Gardou con éxito os seus cambios no filtro.

[[Special:AbuseFilter|Voltar]]',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author LeighvsOptimvsMaximvs
 */
$messages['grc'] = array(
	'abuselog'                  => 'Κατάλογος ὕβρεων',
	'abusefilter-log-noactions' => 'οὐδέν',
	'abusefilter-list-edit'     => 'Μεταγράφειν',
);

/** Hebrew (עברית)
 * @author StuB
 */
$messages['he'] = array(
	'abusefilter-log-search-user' => 'משתמש:',
);

/** Hindi (हिन्दी)
 * @author Kaustubh
 */
$messages['hi'] = array(
	'abusefilter-log-search-title'  => 'शीर्षक:',
	'abusefilter-log-search-submit' => 'खोज',
);

/** Croatian (Hrvatski)
 * @author Dalibor Bosits
 */
$messages['hr'] = array(
	'abusefilter-log-noactions' => 'ništa',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'abusefilter-desc'                         => 'Nałožuje awtomatisku heuristiku na změny.',
	'abusefilter'                              => 'Konfiguracija filtra znjewužiwanja',
	'abuselog'                                 => 'protokol znjewužiwanjow',
	'abusefilter-blocker'                      => 'Filter znjewužiwanja',
	'abusefilter-blockreason'                  => 'Přez filter znjewužiwanja awtomatisce blokowany. Wopisanje prawidła: $1',
	'abusefilter-degroupreason'                => 'Prawa awtomatisce přez filter znjewužiwanja zebrane. Wopisanje prawidła: $1',
	'abusefilter-accountreserved'              => 'Tute kontowe mjeno je za wužiwanje přez filter znjewužiwanja wuměnjene.',
	'right-abusefilter-modify'                 => 'Filtry znjewužiwanja změnić',
	'right-abusefilter-view'                   => 'Filtry znjewužiwanja zwobraznić',
	'right-abusefilter-log'                    => 'Protokol znjewužiwanjow zwobraznić',
	'right-abusefilter-log-detail'             => 'Podrobne zapiski protokola znjewužiwanjow zwobraznić',
	'right-abusefilter-private'                => 'Priwatne daty w protokol znjewužiwanjow zwobraznić',
	'abusefilter-log'                          => 'Protokol filtrow znjewužiwanja',
	'abusefilter-log-search'                   => 'Protokol znjewužiwanjow přepytać',
	'abusefilter-log-search-user'              => 'Wužiwar:',
	'abusefilter-log-search-filter'            => 'ID filtra:',
	'abusefilter-log-search-title'             => 'Titul:',
	'abusefilter-log-search-submit'            => 'Pytać',
	'abusefilter-log-detailslink'              => 'podrobnosće',
	'abusefilter-log-details-legend'           => 'Podrobnosće za protokolowy zapisk $1',
	'abusefilter-log-details-var'              => 'Wariabla',
	'abusefilter-log-details-val'              => 'Hódnota',
	'abusefilter-log-details-vars'             => 'Akciske parametry',
	'abusefilter-log-details-private'          => 'Priwatne daty',
	'abusefilter-log-details-ip'               => 'Wuchadna adresa IP',
	'abusefilter-log-noactions'                => 'žadyn',
	'abusefilter-management'                   => 'Zrjadowanje filtrow znjewužiwanja',
	'abusefilter-list'                         => 'wšě filtry',
	'abusefilter-list-id'                      => 'ID filtra',
	'abusefilter-list-status'                  => 'Status',
	'abusefilter-list-public'                  => 'Zjawne wopisanje',
	'abusefilter-list-consequences'            => 'Konsekwency',
	'abusefilter-list-visibility'              => 'Widźomnosć',
	'abusefilter-list-edit'                    => 'Wobdźěłać',
	'abusefilter-list-details'                 => 'Podrobnosće',
	'abusefilter-hidden'                       => 'Priwatny',
	'abusefilter-unhidden'                     => 'Zjawny',
	'abusefilter-enabled'                      => 'Zmóžnjeny',
	'abusefilter-disabled'                     => 'Znjemóžnjeny',
	'abusefilter-list-new'                     => 'Nowy filter',
	'abusefilter-edit-subtitle'                => 'Filter $1 so wobdźěłuje',
	'abusefilter-edit-new'                     => 'Nowy filter',
	'abusefilter-edit-save'                    => 'Filter składować',
	'abusefilter-edit-id'                      => 'ID filtra:',
	'abusefilter-edit-description'             => "Wopisanje:
:''(zjawnje widźomne)''",
	'abusefilter-edit-flags'                   => 'Chorhojčka:',
	'abusefilter-edit-enabled'                 => 'Tutón filter zmóžnić',
	'abusefilter-edit-hidden'                  => 'Podrobnosće před zjawnym wobhldanjom schować',
	'abusefilter-edit-rules'                   => 'Sadźba prawidłow:',
	'abusefilter-edit-notes'                   => "Přispomnjenki:
:''(priwatne)",
	'abusefilter-edit-lastmod'                 => 'Filter posledni raz změnjeny:',
	'abusefilter-edit-lastuser'                => 'Posledni wužiwar, kotryž je tutón filter změnił:',
	'abusefilter-edit-action-warn'             => 'Tute akcije po warnowanje wužiwarjej zahibać',
	'abusefilter-edit-action-disallow'         => 'Akciju zakazać',
	'abusefilter-edit-action-blockautopromote' => 'Wužiwarjej awtomatisce wobkrućeny status zebrać',
	'abusefilter-edit-action-degroup'          => 'Wužiwarja z priwilegowanych skupinow wotstronić',
	'abusefilter-edit-action-block'            => 'Wobdźěłanjam wužiwarja zadźěwać',
	'abusefilter-edit-action-throttle'         => 'Akcije jenož zahibać, jeli wužiwar prohowu hódnotu překročuje',
	'abusefilter-edit-throttle-count'          => 'Ličba dowolenych akcijow',
	'abusefilter-edit-throttle-period'         => 'Časowy interwal',
	'abusefilter-edit-throttle-seconds'        => '$1 {{PLURAL:$1|sekunda|sekundźe|sekundy|sekundow}}',
	'abusefilter-edit-denied'                  => 'Njemóžeš sej podrobnosće tutoho filtra wobhladać, dokelž je před zjawnym wobhladanjom schowany.',
	'abusefilter-edit-main'                    => 'Filtrowe parametry',
	'abusefilter-edit-done-subtitle'           => 'Fitler wobdźěłany',
	'abusefilter-edit-done'                    => 'Sy swoje změny na filtrje wuspěšnje składował.

[[Special:AbuseFilter|Wróćo]]',
);

/** Hungarian (Magyar)
 * @author Bdamokos
 */
$messages['hu'] = array(
	'abusefilter-desc' => 'Automatikus heurisztikát alkalmaz a szerkesztésekre.',
	'abusefilter'      => 'Visszaélési szűrő beállítása',
	'abuselog'         => 'Visszaélési-napló',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'abusefilter-desc'                         => 'Applica heuristicas automatic al modificationes.',
	'abusefilter'                              => 'Configuration del filtro contra abuso',
	'abuselog'                                 => 'Registro de abusos',
	'abusefilter-warning'                      => "<big>'''Advertimento:'''</big> Iste action ha essite automaticamente identificate como damnose.
Tote modificationes non constructive essera rapidemente revertite,
e le repetition flagrante de modificationes non constructive resultara in le blocada de tu conto o computator.
Si tu crede que iste modification sia constructive, tu pote cliccar Submitter de novo pro confirmar lo.
Un breve description del regula de abuso correspondente a tu action es: $1",
	'abusefilter-disallowed'                   => 'Iste action ha essite automaticamente identificate como damnose,
e per consequente es prohibite.
Si tu crede que tu modification esseva constructive, per favor contacta un administrator, e informa le/la de lo que tu tentava facer.
Un breve description del regula de abuso correspondente a tu action es: $1',
	'abusefilter-blocked-display'              => 'Iste action ha essite automaticamente identificate como nocive,
e tu ha essite impedite de executar lo.
In addition, pro proteger {{SITENAME}}, tu conto de usator e tote le adresses IP associate ha essite blocate de facer modificationes.
Si isto ha occurrite in error, per favor contacta un administrator.
Un breve description del regula anti-abuso correspondente con tu action es: $1',
	'abusefilter-degrouped'                    => 'Iste action ha essite automaticamente identificate como nocive.
Per consequente, illo ha essite impedite, e post que tu conto es suspectate de esser compromittite, tote le derectos ha essite revocate.
Si tu opina que isto sia facite in error, per favor contacta un bureaucrate con un explication de iste action, e tu derectos pote esser restabilite.
Un breve description del regula anti-abuso correspondente con tu action es: $1',
	'abusefilter-autopromote-blocked'          => 'Iste action ha essite automaticamente identificate como nocive, e ha essite impedite.
In addition, como mesura de securitate, alcun privilegios que se accorda normalmente al contos ben stabilite ha essite temporarimente revocate de tu conto.
Un breve description del regula anti-abuso correspondente con tu action es: $1',
	'abusefilter-blocker'                      => 'Filtro anti-abuso',
	'abusefilter-blockreason'                  => 'Automaticamente blocate per le filtro anti-abuso. Description del regula: $1',
	'abusefilter-degroupreason'                => 'Derectos automaticamente retirate per le filtro anti-abuso. Description del regula: $1',
	'abusefilter-accountreserved'              => 'Le nomine de iste conto es reservate pro uso per le filtro anti-abuso.',
	'right-abusefilter-modify'                 => 'Modificar filtros anti-abuso',
	'right-abusefilter-view'                   => 'Vider filtros anti-abuso',
	'right-abusefilter-log'                    => 'Vider le registro de abusos',
	'right-abusefilter-log-detail'             => 'Vider entratas detaliate del registro de abusos',
	'right-abusefilter-private'                => 'Vider datos private in le registro de abusos',
	'abusefilter-log'                          => 'Registro del filtro anti-abuso',
	'abusefilter-log-search'                   => 'Cercar in le registro de abusos',
	'abusefilter-log-search-user'              => 'Usator:',
	'abusefilter-log-search-filter'            => 'ID del filtro:',
	'abusefilter-log-search-title'             => 'Titulo:',
	'abusefilter-log-search-submit'            => 'Cercar',
	'abusefilter-log-entry'                    => '$1: $2 activava un filtro anti-abuso, faciente un $3 in $4. Actiones interprendite: $5; Description del filtro: $6',
	'abusefilter-log-detailedentry'            => '$1: $2 activava filtro $3, faciente un $4 in $5. Actiones interprendite: $6; Description del filtro: $7 ($8)',
	'abusefilter-log-detailslink'              => 'detalios',
	'abusefilter-log-details-legend'           => 'Detalios pro le entrata $1 del registro',
	'abusefilter-log-details-var'              => 'Variabile',
	'abusefilter-log-details-val'              => 'Valor',
	'abusefilter-log-details-vars'             => 'Parametros del action',
	'abusefilter-log-details-private'          => 'Datos private',
	'abusefilter-log-details-ip'               => 'Adresse IP de origine',
	'abusefilter-log-noactions'                => 'nihil',
	'abusefilter-management'                   => 'Gestion del filtro anti-abuso',
	'abusefilter-list'                         => 'Tote le filtros',
	'abusefilter-list-id'                      => 'ID del filtro',
	'abusefilter-list-status'                  => 'Stato',
	'abusefilter-list-public'                  => 'Description public',
	'abusefilter-list-consequences'            => 'Consequentias',
	'abusefilter-list-visibility'              => 'Visibilitate',
	'abusefilter-list-hitcount'                => 'Computo de accessos',
	'abusefilter-list-edit'                    => 'Modificar',
	'abusefilter-list-details'                 => 'Detalios',
	'abusefilter-hidden'                       => 'Private',
	'abusefilter-unhidden'                     => 'Public',
	'abusefilter-enabled'                      => 'Activate',
	'abusefilter-disabled'                     => 'Disactivate',
	'abusefilter-hitcount'                     => '$1 {{PLURAL:$1|visita|visitas}}',
	'abusefilter-list-new'                     => 'Nove filtro',
	'abusefilter-tools-modifiertest-submit'    => 'Provar',
	'abusefilter-tools'                        => 'Alcun [[Special:AbuseFilter/tools|instrumentos]] es disponibile pro assister in le formulation e correction del filtros anti-abuso.',
	'abusefilter-tools-subtitle'               => 'Instrumentos',
	'abusefilter-tools-text'                   => 'Ecce alcun instrumentos utile pro formular e corriger le filtros antiabuso. [[Special:AbuseFilter|Retornar al menu principal]]',
	'abusefilter-tools-expr'                   => 'Verificator de expressiones',
	'abusefilter-tools-submitexpr'             => 'Evalutar',
	'abusefilter-status'                       => 'Del ultime $1 {{PLURAL:$1|action|actiones}}, $2 ($3%) ha attingite le limite de condition definite per $4. $5 ($6%) ha correspondite a un del filtros actualmente active.',
	'abusefilter-edit-subtitle'                => 'Modification del filtro $1',
	'abusefilter-edit-status-label'            => 'Statisticas',
	'abusefilter-edit-status'                  => 'Del ultime $1 {{PLURAL:$1|action|actiones}}, iste filtro ha correspondite a $2 ($3%).',
	'abusefilter-edit-throttled'               => "'''Attention:''' Iste filtro ha essite disactivate automaticamente como mesura de securitate. Illo ha attingite le limite de correspondentia a plus de $1% del actiones.",
	'abusefilter-edit-new'                     => 'Nove filtro',
	'abusefilter-edit-save'                    => 'Immagazinar filtro',
	'abusefilter-edit-id'                      => 'ID del filtro:',
	'abusefilter-edit-description'             => "Description:
:''(visibile al publico)''",
	'abusefilter-edit-flags'                   => 'Bandieras:',
	'abusefilter-edit-enabled'                 => 'Activar iste filtro',
	'abusefilter-edit-hidden'                  => 'Celar del publico le detalios de iste filtro',
	'abusefilter-edit-rules'                   => 'Conditiones:',
	'abusefilter-edit-notes'                   => "Notas:
:''(private)''",
	'abusefilter-edit-lastmod'                 => 'Ultime modification del filtro:',
	'abusefilter-edit-lastuser'                => 'Ultime modificator del filtro:',
	'abusefilter-edit-hitcount'                => 'Accessos al filtro:',
	'abusefilter-edit-consequences'            => 'Actiones interprendite al accesso',
	'abusefilter-edit-action-warn'             => 'Interprender iste actiones post haber date un advertimento al usator',
	'abusefilter-edit-action-disallow'         => 'Impedir que le usator executa le action in question',
	'abusefilter-edit-action-flag'             => 'Marcar le modification in le registro de abusos',
	'abusefilter-edit-action-blockautopromote' => 'Revocar le stato de conto automaticamente confirmate del usator',
	'abusefilter-edit-action-degroup'          => 'Remover le usator de tote le gruppos privilegiate',
	'abusefilter-edit-action-block'            => 'Blocar le usator e/o adresse IP de facer modificationes',
	'abusefilter-edit-action-throttle'         => 'Interprender actiones solmente si le usator excede un limite de frequentia',
	'abusefilter-edit-throttle-count'          => 'Numero de actiones a permitter:',
	'abusefilter-edit-throttle-period'         => 'Periodo de tempore:',
	'abusefilter-edit-throttle-seconds'        => '$1 secundas',
	'abusefilter-edit-throttle-groups'         => "Gruppar le limites de frequentia per:
:''(un per linea; combinar los con commas)''",
	'abusefilter-edit-denied'                  => 'Tu non pote vider le detalios de iste filtro, proque illo es celate del publico',
	'abusefilter-edit-main'                    => 'Parametros del filtro',
	'abusefilter-edit-done-subtitle'           => 'Filtro modificate',
	'abusefilter-edit-done'                    => 'Tu ha immagazinate tu modificationes al filtro con successo.

[[Special:AbuseFilter|Retornar]]',
	'abusefilter-edit-badsyntax'               => 'Il ha un error de syntaxe in le filtro que tu specificava. Le resultato del analysator syntactic esseva: <pre>$1</pre>',
	'abusefilter-edit-viewhistory'             => 'Vider le historia de iste filtro',
	'abusefilter-edit-history'                 => 'Historia',
	'abusefilter-edit-check'                   => 'Verificar syntaxe',
	'abusefilter-history'                      => 'Historia del filtro $1',
	'abusefilter-history-hidden'               => 'celate',
	'abusefilter-history-enabled'              => 'activate',
	'abusefilter-history-timestamp'            => 'Hora',
	'abusefilter-history-user'                 => 'Usator',
	'abusefilter-history-public'               => 'Description public del filtro',
	'abusefilter-history-flags'                => 'Bandieras',
	'abusefilter-history-filter'               => 'Regula del filtro',
	'abusefilter-history-comments'             => 'Commentos',
	'abusefilter-history-actions'              => 'Actiones',
	'abusefilter-history-backedit'             => 'Retornar al modificator de filtros',
	'abusefilter-history-backlist'             => 'Retornar al lista de filtros',
);

/** Italian (Italiano)
 * @author Darth Kule
 */
$messages['it'] = array(
	'abusefilter-log-search-user'   => 'Utente:',
	'abusefilter-log-search-title'  => 'Titolo:',
	'abusefilter-log-search-submit' => 'Ricerca',
	'abusefilter-log-detailslink'   => 'dettagli',
	'abusefilter-log-details-var'   => 'Variabile',
	'abusefilter-log-details-val'   => 'Valore',
	'abusefilter-log-noactions'     => 'nessuna',
	'abusefilter-list-status'       => 'Stato',
	'abusefilter-list-public'       => 'Descrizione pubblica',
	'abusefilter-list-edit'         => 'Modifica',
	'abusefilter-list-details'      => 'Dettagli',
	'abusefilter-edit-status-label' => 'Statistiche',
	'abusefilter-edit-description'  => "Descrizione:
:''(visibile pubblicamente)''",
	'abusefilter-edit-rules'        => 'Condizioni:',
	'abusefilter-edit-notes'        => "Note:
:''(private)''",
	'abusefilter-history-user'      => 'Utente',
	'abusefilter-history-comments'  => 'Commenti',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Lovekhmer
 */
$messages['km'] = array(
	'abusefilter-log-search-user'           => 'អ្នកប្រើប្រាស់:',
	'abusefilter-log-search-title'          => 'ចំនងជើង:',
	'abusefilter-log-search-submit'         => 'ស្វែងរក',
	'abusefilter-log-detailslink'           => 'សេក្តីលំអិត',
	'abusefilter-log-noactions'             => 'ទទេ',
	'abusefilter-list-edit'                 => 'កែប្រែ',
	'abusefilter-list-details'              => 'សេចក្តីលំអិត',
	'abusefilter-tools-modifiertest-submit' => 'សាកល្បង',
	'abusefilter-edit-status-label'         => 'ស្ថិតិ',
	'abusefilter-edit-action-block'         => 'ហាមឃាត់អ្នកប្រើប្រាស់ពីការកែប្រែ',
	'abusefilter-edit-throttle-period'      => 'រយៈពេល:',
	'abusefilter-edit-throttle-seconds'     => '$1វិនាទី',
);

/** Ripoarisch (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'abusefilter-desc'                      => 'Dä Meßbruchsfelter deit Änderunge aan Sigge met Heurestikke pröfe.',
	'abusefilter'                           => 'Enstellunge för dä Meßbruchsfelter',
	'abuselog'                              => 'Et Logboch för dä Meßbruchsfelter',
	'abusefilter-log'                       => 'Logbooch fum Mißbruchsfilder',
	'abusefilter-log-search'                => 'Don em Meßbruchsfelder-Logboch ußsöke',
	'abusefilter-log-search-user'           => 'Metmaacher:',
	'abusefilter-log-search-filter'         => 'Felter-Räjel:',
	'abusefilter-log-search-title'          => 'Tittel:',
	'abusefilter-log-search-submit'         => 'Sök!',
	'abusefilter-log-detailslink'           => 'Einzelheite aanloore',
	'abusefilter-log-details-legend'        => 'Einzelheite för dä Logbooch-Endraach $1',
	'abusefilter-log-details-var'           => 'Speicher (Name)',
	'abusefilter-log-details-val'           => 'Wäät',
	'abusefilter-log-details-ip'            => 'De IP-Address fun däm, dä et jweese wohr',
	'abusefilter-log-noactions'             => 'kei',
	'abusefilter-management'                => 'Verwalldong fum Meßbruchsfellder',
	'abusefilter-list'                      => 'All Filtere',
	'abusefilter-list-status'               => 'Zostand',
	'abusefilter-list-public'               => 'Öffentlesch Beschrievong',
	'abusefilter-list-consequences'         => 'De Follje',
	'abusefilter-list-visibility'           => 'Seeschbakeit',
	'abusefilter-list-hitcount'             => 'Jezallte Treffer',
	'abusefilter-list-edit'                 => 'Ändere',
	'abusefilter-list-details'              => 'Einzelheite',
	'abusefilter-hidden'                    => 'Nit öffentlesch',
	'abusefilter-unhidden'                  => 'Öffentlesch',
	'abusefilter-enabled'                   => 'Aanjeschalldt',
	'abusefilter-disabled'                  => 'Affjeschalldt',
	'abusefilter-hitcount'                  => '{{PLURAL:$1|Eine|$1|keine}} Treffer',
	'abusefilter-list-new'                  => 'Neu Filter-Räjel',
	'abusefilter-tools-modifiertest-submit' => 'Ußprobeere',
	'abusefilter-tools-subtitle'            => 'Werkzeusch',
	'abusefilter-tools-expr'                => 'Ußdröck ußprobeere',
	'abusefilter-tools-submitexpr'          => 'Pröfe',
	'abusefilter-edit-subtitle'             => 'Filter-Räjel $1 beärbeide',
	'abusefilter-edit-status-label'         => 'Zahle un Statistike',
	'abusefilter-edit-new'                  => 'Neu Filter-Räjel',
	'abusefilter-edit-save'                 => 'Faßhallde',
	'abusefilter-edit-id'                   => 'Filter-Räjel:',
	'abusefilter-edit-description'          => "Beschrievong:
:''(Öffentlesch)''",
	'abusefilter-edit-flags'                => 'Fähnscher:',
	'abusefilter-edit-enabled'              => 'Don di Filter-Räjel enschallde',
	'abusefilter-edit-hidden'               => 'Don de Einzelheite fun dä Filter-Räjel nit öffentlesch zeije',
	'abusefilter-edit-rules'                => 'Bedengonge:',
	'abusefilter-edit-notes'                => "Bemerkonge:
:''(Nit öffentlesch)''",
	'abusefilter-edit-lastmod'              => 'Zoletz jeändert:',
	'abusefilter-edit-lastuser'             => 'Metmaacher, dä zoletz jeändert hät:',
	'abusefilter-edit-hitcount'             => 'Treffer:',
	'abusefilter-history-user'              => 'Metmaacher',
	'abusefilter-history-public'            => 'Öffentlesch Beschrevve',
	'abusefilter-history-flags'             => 'Fähnsche',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'abusefilter'                                           => 'Astellung vum Mëssbrauchsfilter',
	'abuselog'                                              => 'Lëscht vum Mëssbrauch',
	'abusefilter-blocker'                                   => 'Filter vum Mëssbrauch',
	'abusefilter-blockreason'                               => 'Automtesch gespaart duerch de Mëssbrauchsfilter. Beschreiwung vun der Regel: $1',
	'abusefilter-degroupreason'                             => 'Rechter goufen atomatesch duerch de Mëssbrauchsfilter ewechgeholl. Beschreiwung vun der Regel: $1',
	'abusefilter-accountreserved'                           => 'Dëse Numm fir e Benotzerkont ass reservéiert fir vum Mëssbrauchs-filer benotzt ze ginn.',
	'right-abusefilter-modify'                              => "D'filtere vum Mëssbrauch änneren",
	'right-abusefilter-view'                                => 'Mëssbrauchs-Filtere weisen',
	'right-abusefilter-log'                                 => 'Lëscht vum Mëssbrauch weisen',
	'abusefilter-log'                                       => 'Lëscht vun de Mëssbrauchs-Filteren',
	'abusefilter-log-search'                                => 'D?Lëscht vum Mëssbrauch duerchsichen',
	'abusefilter-log-search-user'                           => 'Benotzer:',
	'abusefilter-log-search-filter'                         => 'Nummer(ID) vum Filter:',
	'abusefilter-log-search-title'                          => 'Titel:',
	'abusefilter-log-search-submit'                         => 'Sichen',
	'abusefilter-log-detailslink'                           => 'Detailer',
	'abusefilter-log-details-legend'                        => "Detailer fir d'Rubrique am Logbuch $1",
	'abusefilter-log-details-var'                           => 'Variabel',
	'abusefilter-log-details-val'                           => 'Wert',
	'abusefilter-log-details-private'                       => 'Privat Donnéeën',
	'abusefilter-log-details-ip'                            => 'IP-Adress déi bnotzt gouf',
	'abusefilter-log-noactions'                             => 'keen',
	'abusefilter-management'                                => 'Gestioun vum Mëssbrauchsfilter',
	'abusefilter-list'                                      => 'All Filteren',
	'abusefilter-list-id'                                   => 'Nummer(ID) vum Filter',
	'abusefilter-list-status'                               => 'Statut',
	'abusefilter-list-public'                               => 'Ëffentlech Beschreiwung',
	'abusefilter-list-consequences'                         => 'Konsequenzen',
	'abusefilter-list-visibility'                           => 'Visibilitéit',
	'abusefilter-list-edit'                                 => 'Änneren',
	'abusefilter-list-details'                              => 'Dteailer',
	'abusefilter-hidden'                                    => 'Privat',
	'abusefilter-unhidden'                                  => 'Ëffentlech',
	'abusefilter-enabled'                                   => 'Aktivéiert',
	'abusefilter-disabled'                                  => 'Desaktivéiert',
	'abusefilter-list-new'                                  => 'Neie Filter',
	'abusefilter-tools-modifiertest-submit'                 => 'Test',
	'abusefilter-edit-subtitle'                             => 'Änner vum Filter $1',
	'abusefilter-edit-status-label'                         => 'Statistiken',
	'abusefilter-edit-new'                                  => 'Neie Filter',
	'abusefilter-edit-save'                                 => 'Filter späicheren',
	'abusefilter-edit-id'                                   => 'Nummer (ID) vum Filter:',
	'abusefilter-edit-description'                          => "Beschreiwung:
:''(ëffentlech)''",
	'abusefilter-edit-flags'                                => 'Fändelen:',
	'abusefilter-edit-enabled'                              => 'Dëse Filter aktivéieren',
	'abusefilter-edit-hidden'                               => "Verstop d'Detailer vun dësem Filter virun der Ëffentlechkeet",
	'abusefilter-edit-rules'                                => 'Conditiounen:',
	'abusefilter-edit-notes'                                => "Notizen:
:''(privat)''",
	'abusefilter-edit-lastmod'                              => "De Filter gouf fir d'lescht geännert",
	'abusefilter-edit-lastuser'                             => 'Leschte Benotzer deen dëse Filter geännert huet:',
	'abusefilter-edit-action-disallow'                      => 'Dem Benotzer dës Aktioun net erlaben',
	'abusefilter-edit-action-flag'                          => "D'Ännerung am Mëssbrauchslog markéieren",
	'abusefilter-edit-action-degroup'                       => 'De Benotzer aus alle priviligéierte Gruppen eraushuelen',
	'abusefilter-edit-action-block'                         => "De Benotzer an/oder d'IP-Adress fir Ännerunge spären",
	'abusefilter-edit-throttle-period'                      => 'Zäitraum:',
	'abusefilter-edit-throttle-seconds'                     => '$1 Sekonnen',
	'abusefilter-edit-denied'                               => 'Dir kënnt Detailer vun dësem Filter net gesinn, well se virum Public verstoppr sinn',
	'abusefilter-edit-main'                                 => 'Parametere vum Filter',
	'abusefilter-edit-done-subtitle'                        => 'Filter geännert',
	'abusefilter-edit-done'                                 => 'Dir hutt är Ännerunge vum Filter ofgespäichert.

[[Special:AbuseFilter|Zréck]]',
	'abusefilter-edit-history'                              => 'Versiounen',
	'abusefilter-edit-check'                                => 'Syntax iwwerpréifen',
	'abusefilter-edit-builder-op-arithmetic-addition'       => 'Additioun (+)',
	'abusefilter-edit-builder-op-arithmetic-multiplication' => 'Multiplikatioun (*)',
	'abusefilter-edit-builder-op-arithmetic-divide'         => 'Divisioun (/)',
	'abusefilter-edit-builder-op-comparison-equal'          => 'Dselwescht wéi (==)',
	'abusefilter-edit-builder-op-comparison-lt'             => 'Manner wéi (<)',
	'abusefilter-edit-builder-op-comparison-gt'             => 'Méi grouss wéi (>)',
	'abusefilter-edit-builder-op-bool-not'                  => 'Net (!)',
	'abusefilter-edit-builder-op-bool-and'                  => 'An (&)',
	'abusefilter-edit-builder-op-bool-or'                   => 'Oder (|)',
	'abusefilter-edit-builder-group-funcs'                  => 'Fonctiounen',
	'abusefilter-edit-builder-vars-action'                  => 'Aktioun',
	'abusefilter-edit-builder-vars-summary'                 => 'Resumé/Grond vun der Ännerung',
	'abusefilter-edit-builder-vars-article-id'              => 'ID (Nummer) vum Artikel',
	'abusefilter-edit-builder-vars-user-name'               => 'Numm vum Benotzerkont',
	'abusefilter-edit-builder-vars-user-emailconfirm'       => "Wéini d'E-Mailadress confirméiert gouf",
	'abusefilter-history-hidden'                            => 'verstoppt',
	'abusefilter-history-enabled'                           => 'ageschalt',
	'abusefilter-history-timestamp'                         => 'Zäit',
	'abusefilter-history-user'                              => 'Benotzer',
	'abusefilter-history-comments'                          => 'Bemierkungen',
	'abusefilter-history-actions'                           => 'Aktiounen',
);

/** Lithuanian (Lietuvių)
 * @author Tomasdd
 */
$messages['lt'] = array(
	'abusefilter-log-search-user'   => 'Naudotojas:',
	'abusefilter-log-search-submit' => 'Ieškoti',
);

/** Maltese (Malti)
 * @author Giangian15
 * @author Roderick Mallia
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'abusefilter-log-search'        => "Fittex ir-reġistru ta' l-abbużi",
	'abusefilter-log-search-user'   => 'Utent:',
	'abusefilter-log-search-filter' => 'ID tal-Filtru:',
	'abusefilter-log-search-title'  => 'Titlu:',
	'abusefilter-log-search-submit' => 'Fittex',
	'abusefilter-history-comments'  => 'Kummenti',
);

/** Nahuatl (Nahuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'abusefilter-log-search-user'      => 'Tlatequitiltilīlli:',
	'abusefilter-log-search-title'     => 'Tōcāitl:',
	'abusefilter-log-search-submit'    => 'Tlatēmōz',
	'abusefilter-log-noactions'        => 'ahtlein',
	'abusefilter-list-edit'            => 'Ticpatlāz',
	'abusefilter-edit-throttle-period' => 'Cāhuitl:',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 * @author Annabel
 */
$messages['nl'] = array(
	'abusefilter-desc'                                      => 'Voert automatisch heuristische analyse uit op bewerkingen',
	'abusefilter'                                           => 'Misbruikfilterconfiguratie',
	'abuselog'                                              => 'Misbruiklogboek',
	'abusefilter-warning'                                   => "<big>'''Waarschuwing'''</big>: Deze handeling is automatisch geïdentificeerd als schadelijk.
Onconstructieve bewerkingen worden snel teruggedraaid, en herhaald onconstructief bewerken eindigt in een blokkade van uw gebruiker.
Als u denkt dat deze bewerking wel constructief is, klik dan opnieuw op \"Pagina opslaan\" om de bewerking te bevestigen.
Een korte beschrijving van de regel op basis waarvan uw bewerking is tegengehouden volgt nu: \$1",
	'abusefilter-disallowed'                                => 'Deze handeling is automatisch geïdentificeerd als schadelijk, en daarom niet toegelaten.
Als u denkt dat uw bewerking wel constructief was, neem dan contact op met een beheerder, en informeer hemwat u probeerde te doen.
Een korte beschrijving van de regel op basis waarvan uw bewerking is tegengehouden volgt nu: $1',
	'abusefilter-blocked-display'                           => 'Deze handeling is automatisch geïdentificeerd als schadelijk. Daarom is deze niet uitgevoerd.
Om {{SITENAME}} te beschermen zijn uw gebruiker en alle bijbehorende IP-adressen geblokkeerd.
Als deze maatregel onterecht is genomen, neem dan contact op met een beheerder.
Een korte beschrijving van de regel op basis waarvan uw bewerking is tegengehouden volgt nu: $1',
	'abusefilter-degrouped'                                 => 'Deze handeling is automatisch geïdentificeerd als schadelijk.
Omdat is vastgesteld dat deze gebruiker mogelijk door iemand anders wordt misbruikt, zijn alle rechten ingetrokken.
Als deze maatregel onterecht is genomen, neem dan contact op met een bureaucraat en licht deze handeling toe, zodat uw rechten hersteld kunnen worden.
Een korte beschrijving van de regel op basis waarvan uw bewerking is tegengehouden volgt nu: $1',
	'abusefilter-autopromote-blocked'                       => 'Deze handeling is automatisch geïdentificeerd als schadelijk. Daarom is deze niet uitgevoerd.
Als aanvullende veiligheidsmaatregel zijn een aantal automatisch toegekende rechten voor uw gebruiker tijdelijk ingetrokken.
Een korte beschrijving van de regel op basis waarvan uw bewerking is tegengehouden volgt nu: $1',
	'abusefilter-blocker'                                   => 'Misbruikfilter',
	'abusefilter-blockreason'                               => 'Automatisch geblokeerd door misbruikfilter. Regelbeschrijving: $1',
	'abusefilter-degroupreason'                             => 'Rechten zijn automatisch verwijderd door het misbruikfilter. Regelbeschrijving: $1',
	'abusefilter-accountreserved'                           => 'Deze gebruiker is gereserveerd voor de misbruikfilter.',
	'right-abusefilter-modify'                              => 'Misbruikfilters wijzigen',
	'right-abusefilter-view'                                => 'Misbruikfilters bekijken',
	'right-abusefilter-log'                                 => 'Het misbruiklogboek bekijken',
	'right-abusefilter-log-detail'                          => 'Gedetailleerde items in het misbruiklogboek bekijken',
	'right-abusefilter-private'                             => 'Private gegevens in het misbruiklogboek bekijken',
	'abusefilter-log'                                       => 'Misbruiklogboek',
	'abusefilter-log-search'                                => 'Het misbruiklogboek doorzoeken',
	'abusefilter-log-search-user'                           => 'Gebruiker:',
	'abusefilter-log-search-filter'                         => 'Filternummer:',
	'abusefilter-log-search-title'                          => 'Titel:',
	'abusefilter-log-search-submit'                         => 'Zoeken',
	'abusefilter-log-entry'                                 => '$1: $2 deed een misbruikfilter afgaan bij het doen van een $3 op $4. Genomen actie: $5. Filterbeschrijving: $6',
	'abusefilter-log-detailedentry'                         => '$1: $2 liet misbruikfilter $3 afgaan bij het uitvoeren van een $4 op $5. Genomen acties: $6. Filterbeschrijving: $7 ($8)',
	'abusefilter-log-detailslink'                           => 'details',
	'abusefilter-log-details-legend'                        => 'Details voor logboekitem $1',
	'abusefilter-log-details-var'                           => 'Variabele',
	'abusefilter-log-details-val'                           => 'Waarde',
	'abusefilter-log-details-vars'                          => 'Handelingsparameters',
	'abusefilter-log-details-private'                       => 'Private gegevens',
	'abusefilter-log-details-ip'                            => 'IP-adres bron',
	'abusefilter-log-noactions'                             => 'geen',
	'abusefilter-management'                                => 'Beheer van misbruikfilter',
	'abusefilter-list'                                      => 'Alle filters',
	'abusefilter-list-id'                                   => 'Filternummer',
	'abusefilter-list-status'                               => 'Status',
	'abusefilter-list-public'                               => 'Publieke beschrijving',
	'abusefilter-list-consequences'                         => 'Gevolgen',
	'abusefilter-list-visibility'                           => 'Zichtbaarheid',
	'abusefilter-list-hitcount'                             => 'Hitcount',
	'abusefilter-list-edit'                                 => 'Bewerken',
	'abusefilter-list-details'                              => 'Details',
	'abusefilter-hidden'                                    => 'Privaat',
	'abusefilter-unhidden'                                  => 'Publiek',
	'abusefilter-enabled'                                   => 'Ingeschakeld',
	'abusefilter-disabled'                                  => 'Uitgeschakeld',
	'abusefilter-hitcount'                                  => '$1 {{PLURAL:$1|hit|hits}}',
	'abusefilter-list-new'                                  => 'Nieuwe filter',
	'abusefilter-tools-modifiertest-submit'                 => 'Testen',
	'abusefilter-tools'                                     => 'Er zijn een aantal [[Special:AbuseFilter/tools|hulpmiddelen]] beschikbaar voor het maken en testen van misbruikfilters.',
	'abusefilter-tools-subtitle'                            => 'Hulpmiddelen',
	'abusefilter-tools-text'                                => 'Dit zijn een aantal hulpmiddelen die van pas kunnen komen bij het formuleren en debuggen van misbruikfilters.
[[Special:AbuseFilter|Terug naar het hoofdmenu]]',
	'abusefilter-tools-expr'                                => 'Expressietester',
	'abusefilter-tools-submitexpr'                          => 'Evalueren',
	'abusefilter-status'                                    => 'Van de laatste {{PLURAL:$1|actie|$1 acties}}, {{PLURAL:$2|heeft|hebben}} er $2 ($3%) de conditielimiet van $4 gehaald.
$5 ($6%) {{PLURAL:$5|voldeed|voldeden}} aan een van de actieve filters.',
	'abusefilter-edit-subtitle'                             => 'Bezig met het bewerken van filter $1',
	'abusefilter-edit-status-label'                         => 'Statistieken',
	'abusefilter-edit-status'                               => '{{PLURAL:$1|De laatste actie voldeed|Van de laatste $1 acties voldeden er $2}} aan deze filter ($3%).',
	'abusefilter-edit-throttled'                            => "'''Waarschuwing''': deze filter is als veiligheidsmaatregel automatisch uitgeschakeld. De limiet van voldoen aan meer dan $1% van de handelingen is bereikt.",
	'abusefilter-edit-new'                                  => 'Nieuwe filter',
	'abusefilter-edit-save'                                 => 'Filter opslaan',
	'abusefilter-edit-id'                                   => 'Filternummer:',
	'abusefilter-edit-description'                          => "Beschrijving:
:''(publiekelijk zichtbaar)''",
	'abusefilter-edit-flags'                                => 'Vlaggen:',
	'abusefilter-edit-enabled'                              => 'Deze filter inschakelen',
	'abusefilter-edit-hidden'                               => 'Details van deze filter verbergen voor het publiek',
	'abusefilter-edit-rules'                                => 'Regels:',
	'abusefilter-edit-notes'                                => "Opmerkingen:
:''(privaat)''",
	'abusefilter-edit-lastmod'                              => 'Filter laatst aangepast:',
	'abusefilter-edit-lastuser'                             => 'Gebruiker die deze filter het laatste heeft bewerkt:',
	'abusefilter-edit-hitcount'                             => 'Hits filteren:',
	'abusefilter-edit-consequences'                         => 'Genomen actie bij hit',
	'abusefilter-edit-action-warn'                          => 'Voer deze acties uit nadat een gebruiker een waarschuwing heeft gekregen',
	'abusefilter-edit-action-disallow'                      => 'Voorkomen dat de gebruiker de handeling kan uitvoeren',
	'abusefilter-edit-action-flag'                          => 'De bewerking in het misbruiklogboek markeren',
	'abusefilter-edit-action-blockautopromote'              => 'De bevestigde status van deze gebruiker verwijderen',
	'abusefilter-edit-action-degroup'                       => 'De gebruiker uit alle gebruikersgroepen verwijderen',
	'abusefilter-edit-action-block'                         => 'Bewerken door de gebruiker en/of het IP-adres blokkeren',
	'abusefilter-edit-action-throttle'                      => 'Acties alleen uitvoeren als de gebruiker een drempelwaarde overschreidt',
	'abusefilter-edit-throttle-count'                       => 'Aantal handelingen om toe te laten:',
	'abusefilter-edit-throttle-period'                      => 'Tijdsduur:',
	'abusefilter-edit-throttle-seconds'                     => '$1 seconden',
	'abusefilter-edit-throttle-groups'                      => "Groepsbeperkingen per tijdseenheid op basis van:
:''(één per regel, combineren met komma's)''",
	'abusefilter-edit-denied'                               => 'U mag de details van deze filter niet bekijken, omdat het verborgen is voor het publiek',
	'abusefilter-edit-main'                                 => 'Filterparameters',
	'abusefilter-edit-done-subtitle'                        => 'Filter bewerkt',
	'abusefilter-edit-done'                                 => 'U hebt uw wijzigingen aan de filter successvol opgeslagen.

[[Special:AbuseFilter|Terugkeren]]',
	'abusefilter-edit-badsyntax'                            => 'Er zit een syntaxisfout in de opgegeven filter.
De uitvoer van de parser was: <pre>$1</pre>',
	'abusefilter-edit-viewhistory'                          => 'Geschiedenis van de filter bekijken',
	'abusefilter-edit-history'                              => 'Geschiedenis',
	'abusefilter-edit-check'                                => 'Syntaxis controleren',
	'abusefilter-edit-builder-select'                       => 'Selecteer een optie om deze aan de cursor toe te voegen',
	'abusefilter-edit-builder-group-op-arithmetic'          => 'Aritmische operators',
	'abusefilter-edit-builder-op-arithmetic-addition'       => 'Optelling (+)',
	'abusefilter-edit-builder-op-arithmetic-subtraction'    => 'Aftrekken (-)',
	'abusefilter-edit-builder-op-arithmetic-multiplication' => 'Vermenigvuldiging (*)',
	'abusefilter-edit-builder-op-arithmetic-divide'         => 'Deling (/)',
	'abusefilter-edit-builder-op-arithmetic-modulo'         => 'Modulus (%)',
	'abusefilter-edit-builder-op-arithmetic-pow'            => 'Machtsverheffing (**)',
	'abusefilter-edit-builder-group-op-comparison'          => 'Comparatieve operatators',
	'abusefilter-edit-builder-op-comparison-equal'          => 'Gelijk aan (==)',
	'abusefilter-edit-builder-op-comparison-notequal'       => 'Niet gelijk aan (!=)',
	'abusefilter-edit-builder-op-comparison-lt'             => 'Kleiner dan (<)',
	'abusefilter-edit-builder-op-comparison-gt'             => 'Groter dan (>)',
	'abusefilter-edit-builder-op-comparison-lte'            => 'Kleiner dan of gelijk aan (<=)',
	'abusefilter-edit-builder-op-comparison-gte'            => 'Groter dan of gelijk aan (>=)',
	'abusefilter-edit-builder-group-op-bool'                => 'Booleaanse operatoren',
	'abusefilter-edit-builder-op-bool-not'                  => 'Niet (!)',
	'abusefilter-edit-builder-op-bool-and'                  => 'En (&)',
	'abusefilter-edit-builder-op-bool-or'                   => 'Of (|)',
	'abusefilter-edit-builder-group-misc'                   => 'Overige',
	'abusefilter-edit-builder-misc-ternary'                 => 'Ternaire operator (1 ? 2 : 3)',
	'abusefilter-edit-builder-misc-in'                      => 'maakt onderdeel uit van string (in)',
	'abusefilter-edit-builder-misc-like'                    => 'Voldoet aan reguliere expressie (like)',
	'abusefilter-edit-builder-group-funcs'                  => 'Functies',
	'abusefilter-edit-builder-funcs-length'                 => 'Stringlengte (length)',
	'abusefilter-edit-builder-funcs-lcase'                  => 'Met kleine letters (lcase)',
	'abusefilter-edit-builder-funcs-ccnorm'                 => 'Verwarrende karakters normaliseren (ccnorm)',
	'abusefilter-edit-builder-funcs-rmdoubles'              => 'Dubbele karakters verwijderen (rmdoubles)',
	'abusefilter-edit-builder-funcs-specialratio'           => 'Speciale karakters / totaal aantal karakters (specialratio)',
	'abusefilter-edit-builder-funcs-norm'                   => 'Normaliseren (norm)',
	'abusefilter-edit-builder-funcs-count'                  => 'Aantal keren dat string X voorkomt in string Y (count)',
	'abusefilter-edit-builder-group-vars'                   => 'Variabelen',
	'abusefilter-edit-builder-vars-accountname'             => 'Gebruikersnaam (on account creation)',
	'abusefilter-edit-builder-vars-action'                  => 'Actie',
	'abusefilter-edit-builder-vars-addedlines'              => 'Regels toegevoegd in bewerking',
	'abusefilter-edit-builder-vars-delta'                   => 'Groote wijziging',
	'abusefilter-edit-builder-vars-diff'                    => 'Unified diff of wijzigingen in bewerking',
	'abusefilter-edit-builder-vars-newsize'                 => 'Nieuwe paginagrootte',
	'abusefilter-edit-builder-vars-oldsize'                 => 'Oude paginagrootte',
	'abusefilter-edit-builder-vars-removedlines'            => 'Lijnen verwijderd in bijdrage',
	'abusefilter-edit-builder-vars-summary'                 => 'Bewerkingssamenvatting',
	'abusefilter-edit-builder-vars-article-id'              => 'Artikel ID',
	'abusefilter-edit-builder-vars-article-ns'              => 'Artikel naamruimte',
	'abusefilter-edit-builder-vars-article-text'            => 'Titel (zonder naamruimte)',
	'abusefilter-edit-builder-vars-article-prefixedtext'    => 'Volledige titel',
	'abusefilter-edit-builder-vars-movedfrom-id'            => 'Paginaid van de te verplaatsen pagina',
	'abusefilter-edit-builder-vars-movedfrom-ns'            => 'Naamruimte van de te verplaatsen pagina',
	'abusefilter-edit-builder-vars-movedfrom-text'          => 'Naam van de te verplaatsen pagina',
	'abusefilter-edit-builder-vars-movedfrom-prefixedtext'  => 'Volledige naam van de te verplaatsen pagina',
	'abusefilter-edit-builder-vars-movedto-id'              => 'Paginaid van de bestemming van de te verplaatsen pagina',
	'abusefilter-edit-builder-vars-movedto-ns'              => 'Naamruimte van de bestemming van de te verplaatsen pagina',
	'abusefilter-edit-builder-vars-movedto-text'            => 'Naam van de bestemming van de te verplaatsen pagina',
	'abusefilter-edit-builder-vars-movedto-prefixedtext'    => 'Volledige naam van de bestemming van de te verplaatsen pagina',
	'abusefilter-edit-builder-vars-user-editcount'          => 'Aantal bewerkingen gebruiker',
	'abusefilter-edit-builder-vars-user-age'                => 'Bestaansduur gebruiker',
	'abusefilter-edit-builder-vars-user-name'               => 'Gebruikersnaam',
	'abusefilter-edit-builder-vars-user-groups'             => 'Groepen (inclusief impliciete) waar gebruiker lid van is',
	'abusefilter-edit-builder-vars-user-emailconfirm'       => 'Tijdstip email bevestiging',
	'abusefilter-history'                                   => 'Geschiedenis voor de filter $1',
	'abusefilter-history-hidden'                            => 'verborgen',
	'abusefilter-history-enabled'                           => 'ingeschakeld',
	'abusefilter-history-timestamp'                         => 'Tijd',
	'abusefilter-history-user'                              => 'Gebruiker',
	'abusefilter-history-public'                            => 'Publieke filterbeschrijving',
	'abusefilter-history-flags'                             => 'Vlaggen',
	'abusefilter-history-filter'                            => 'Filterregel',
	'abusefilter-history-comments'                          => 'Opmerkingen',
	'abusefilter-history-actions'                           => 'Acties',
	'abusefilter-history-backedit'                          => 'Terug naar filters bewerken',
	'abusefilter-history-backlist'                          => 'Terug naar filterlijst',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 */
$messages['no'] = array(
	'abusefilter-desc'                                      => 'Legger automatisk til heuristikk til redigeringer.',
	'abusefilter'                                           => 'Konfigurasjon av misbruksfilter',
	'abuselog'                                              => 'Misbrukslogg',
	'abusefilter-warning'                                   => "<big>'''Advarsel:'''</big> Handlingen har automatisk blitt identifisert som skadelig.
Ikke-konstruktive redigeringer blir raskt tilbakestilt, og langvarig forstyrrende redigering vil føre til at din konto eller datamaskin blir blokkert. Om du mener dette er en konstruktiv redigering, klikk «Lagre» igjen for å bekrefte.
En kortfattet beskrivelse av misbruksregelen som din handling utløste er: $1",
	'abusefilter-disallowed'                                => 'Denne handlingen har automatisk blitt identifisert som skadelig, og tillates ikke. Om du mener redigeringen var konstruktiv, kontakt en administrator og informer ham eller henne om hva du prøvde å få til.
En kortfattet beskrivelse av misbruksregelen som din handling utløste er: $1',
	'abusefilter-blocked-display'                           => 'Denne handlingen har automatisk blitt identifisert som skadelig, og du har blitt hindret fra å gjennomføre den. I tillegg har kontoen din og alle IP-adresser assosiert med denne blitt blokkert fra å redigere {{SITENAME}}. Om dette var en feil, kontakt en administrator.
En kortfattet beskrivelse av misbruksregelen som din handling utløste er: $1',
	'abusefilter-degrouped'                                 => 'Denne handlingen har automatisk blitt identifisert som skadelig. Derfor ble den ikke tillatt, og på grunn av mistanke om misbruk har kontoen din mistet alle rettigheter. Om du mener dette er en feil, kontakt en byråkrat med en forklaring på hva du gjorde, og rettighetene dine kan bli gjenopprettet.
En kortfattet beskrivelse av misbruksregelen som din handling utløste er: $1',
	'abusefilter-autopromote-blocked'                       => 'Denne handlingen har automatisk blitt identifisert som skadelig, og ble ikke tillatt.
I tillegg ble noen av rettighetene kontoen din hadde fjernet midlertidig, av sikkerhetsmessige grunner.
En kort beskrivelse av misbruksregelen handlingen din brøt er: $1',
	'abusefilter-blocker'                                   => 'Misbruksfilter',
	'abusefilter-blockreason'                               => 'Automatisk blokkert for å utføre skadelige redigeringer. Regelbeskrivelse: $1',
	'abusefilter-degroupreason'                             => 'Rettigheter fjernet automatisk av misbruksfilter. Regelbeskrivelse: $1',
	'abusefilter-accountreserved'                           => 'Denne kontoen er reservert for bruk av misbruksfilteret.',
	'right-abusefilter-modify'                              => 'Endre misbruksfiltere',
	'right-abusefilter-view'                                => 'Vise misbruksfiltere',
	'right-abusefilter-log'                                 => 'Vise misbruksloggen',
	'right-abusefilter-log-detail'                          => 'Vise detaljerte punkter i misbruksloggen',
	'right-abusefilter-private'                             => 'Vise privat informasjon i misbruksloggen',
	'abusefilter-log'                                       => 'Logg for misbruksfilter',
	'abusefilter-log-search'                                => 'Søk i misbruksloggen',
	'abusefilter-log-search-user'                           => 'Bruker:',
	'abusefilter-log-search-filter'                         => 'Filter-ID:',
	'abusefilter-log-search-title'                          => 'Tittel:',
	'abusefilter-log-search-submit'                         => 'Søk',
	'abusefilter-log-entry'                                 => '$1: $2 utløste misbruksfilteret ved å gjøre en $3 på $4. Reaksjon: $5; filterbeskrivelse: $6',
	'abusefilter-log-detailedentry'                         => '$1: $1: $2 utløste misbruksfilter $3, ved å gjøre en $4 på $5. Reaksjon: $6; filterbeskrivelse: $7 ($8)',
	'abusefilter-log-detailslink'                           => 'detaljer',
	'abusefilter-log-details-legend'                        => 'Detaljer for loggelement $1',
	'abusefilter-log-details-var'                           => 'Variabel',
	'abusefilter-log-details-val'                           => 'Verdi',
	'abusefilter-log-details-vars'                          => 'Handlingsparametere',
	'abusefilter-log-details-private'                       => 'Privat informasjon',
	'abusefilter-log-details-ip'                            => 'Opphavs-IP',
	'abusefilter-log-noactions'                             => 'ingen',
	'abusefilter-management'                                => 'Behandling av misbruksfilter',
	'abusefilter-list'                                      => 'Alle filtere',
	'abusefilter-list-id'                                   => 'Filter-ID',
	'abusefilter-list-status'                               => 'Status',
	'abusefilter-list-public'                               => 'Offentlig beskrivelse',
	'abusefilter-list-consequences'                         => 'Konsekvenser',
	'abusefilter-list-visibility'                           => 'Synlighet',
	'abusefilter-list-hitcount'                             => 'Treffteller',
	'abusefilter-list-edit'                                 => 'Rediger',
	'abusefilter-list-details'                              => 'Detaljer',
	'abusefilter-hidden'                                    => 'Privat',
	'abusefilter-unhidden'                                  => 'Offentlig',
	'abusefilter-enabled'                                   => 'Slått på',
	'abusefilter-disabled'                                  => 'Slått av',
	'abusefilter-hitcount'                                  => '$1 {{PLURAL:$1|treff|treff}}',
	'abusefilter-list-new'                                  => 'Nytt filter',
	'abusefilter-tools-modifiertest-submit'                 => 'Test',
	'abusefilter-tools'                                     => 'Noen [[Special:AbuseFilter/tools|verktøy]] er tilgjengelig til hjelp med formulering og feilsøking i forbindelse med misbruksfiltere.',
	'abusefilter-tools-subtitle'                            => 'Verktøy',
	'abusefilter-tools-text'                                => 'Her er noen verktøy som kan være nyttige for å formulere og feilsøking i misbruksfiltere. [[Special:AbuseFilter|Tilbake til hovedmeny]]',
	'abusefilter-tools-expr'                                => 'Uttrykkstester',
	'abusefilter-tools-submitexpr'                          => 'Evaluer',
	'abusefilter-status'                                    => 'Av {{PLURAL:$1|den siste handlingen|de siste $1 handlingene}} har $2 ($3&nbsp;%) nådd grenseverdien $4. $5 ($6&nbsp;%) passet med en av de påslåtte filterne.',
	'abusefilter-edit-subtitle'                             => 'Redigerer filteret $1',
	'abusefilter-edit-status-label'                         => 'Statistikk',
	'abusefilter-edit-status'                               => 'Av {{PLURAL:$|den siste handlingen|de siste $1 handlingene}} har dette filteret passet med $2 ($3&nbsp;%).',
	'abusefilter-edit-throttled'                            => "'''Advarsel:''' Dette filteret ble automatisk slått av av sikkerhetsårsaker. Det nådde grensen på $1&nbsp;% av alle handlinger.",
	'abusefilter-edit-new'                                  => 'Nytt filter',
	'abusefilter-edit-save'                                 => 'Lagre filter',
	'abusefilter-edit-id'                                   => 'Filter-ID:',
	'abusefilter-edit-description'                          => ":''(vises offentlig)''",
	'abusefilter-edit-flags'                                => 'Flagg:',
	'abusefilter-edit-enabled'                              => 'Slå på dette filteret',
	'abusefilter-edit-hidden'                               => 'Skjul detaljer om dette filteret',
	'abusefilter-edit-rules'                                => 'Regelverk:',
	'abusefilter-edit-notes'                                => ":''(privat)''",
	'abusefilter-edit-lastmod'                              => 'Filter sist endret:',
	'abusefilter-edit-lastuser'                             => 'Siste bruker som endret dette filteret:',
	'abusefilter-edit-hitcount'                             => 'Filtertreff:',
	'abusefilter-edit-consequences'                         => 'Handlinger som skal tas ved treff',
	'abusefilter-edit-action-warn'                          => 'Gi brukeren en advarsel før disse handlingene foretas',
	'abusefilter-edit-action-disallow'                      => 'Hindre brukeren i å utføre handlingen',
	'abusefilter-edit-action-flag'                          => 'Flagg redigeringen i misbruksloggen',
	'abusefilter-edit-action-blockautopromote'              => 'Fjern brukeres «autoconfirmed»-status',
	'abusefilter-edit-action-degroup'                       => 'Fjern brukeren fra alle grupper',
	'abusefilter-edit-action-block'                         => 'Blokker brukeren og/eller IP-adressen fra redigering',
	'abusefilter-edit-action-throttle'                      => 'Gjennomfør dette kun dersom brukeren gjør det flere ganger',
	'abusefilter-edit-throttle-count'                       => 'Antall tillatte handlinger:',
	'abusefilter-edit-throttle-period'                      => 'Tidsperiode:',
	'abusefilter-edit-throttle-seconds'                     => '{{PLURAL:$1|ett sekund|$1 sekunder}}',
	'abusefilter-edit-throttle-groups'                      => "Grupper fart etter:
:''(en på hver linje, kombiner med kommaer)''",
	'abusefilter-edit-denied'                               => 'Du kan ikke se detaljene i dette filteret, fordi de er skjult fra offentligheten',
	'abusefilter-edit-main'                                 => 'Filterparametere',
	'abusefilter-edit-done-subtitle'                        => 'Filter redigert',
	'abusefilter-edit-done'                                 => 'Du har lagret endringene dine i filteret.

[[Special:AbuseFilter|Tilbake]]',
	'abusefilter-edit-badsyntax'                            => 'Det er en syntaksfeil i filteret du anga. Resultatet fra fortolkeren var: <pre>$1</pre>',
	'abusefilter-edit-viewhistory'                          => 'Vis dette filterets historikk',
	'abusefilter-edit-history'                              => 'Historikk',
	'abusefilter-edit-check'                                => 'Sjekk syntaks',
	'abusefilter-edit-builder-select'                       => 'Velg et alternativ for å legge det til på markøren',
	'abusefilter-edit-builder-group-op-arithmetic'          => 'Aritmetiske operatører',
	'abusefilter-edit-builder-op-arithmetic-addition'       => 'Addisjon (+)',
	'abusefilter-edit-builder-op-arithmetic-subtraction'    => 'Subtraksjon (-)',
	'abusefilter-edit-builder-op-arithmetic-multiplication' => 'Multiplikasjon (*)',
	'abusefilter-edit-builder-op-arithmetic-divide'         => 'Divisjon (/)',
	'abusefilter-edit-builder-op-arithmetic-modulo'         => 'Modulo (%)',
	'abusefilter-edit-builder-op-arithmetic-pow'            => 'Kraft (**)',
	'abusefilter-edit-builder-group-op-comparison'          => 'Sammenligningsoperatører',
	'abusefilter-edit-builder-op-comparison-equal'          => 'Er lik (==)',
	'abusefilter-edit-builder-op-comparison-notequal'       => 'Er ikke lik (!=)',
	'abusefilter-edit-builder-op-comparison-lt'             => 'Mindre enn (<)',
	'abusefilter-edit-builder-op-comparison-gt'             => 'Større enn (>)',
	'abusefilter-edit-builder-op-comparison-lte'            => 'Mindre en eller lik med (<=)',
	'abusefilter-edit-builder-op-comparison-gte'            => 'Større enn eller lik med (>=)',
	'abusefilter-edit-builder-group-op-bool'                => 'Boolske operatorer',
	'abusefilter-edit-builder-op-bool-not'                  => 'Ikke (!)',
	'abusefilter-edit-builder-op-bool-and'                  => 'Og (&)',
	'abusefilter-edit-builder-op-bool-or'                   => 'Eller (|)',
	'abusefilter-edit-builder-group-misc'                   => 'Diverse',
	'abusefilter-edit-builder-misc-ternary'                 => 'Trefoldig operator (1 ? 2 : 3)',
	'abusefilter-edit-builder-misc-in'                      => 'del av en streng (in)',
	'abusefilter-edit-builder-misc-like'                    => 'Passer med regulært uttrykk (like)',
	'abusefilter-edit-builder-group-funcs'                  => 'Funksjoner',
	'abusefilter-edit-builder-funcs-length'                 => 'Strenglengde (length)',
	'abusefilter-edit-builder-funcs-lcase'                  => 'GJør om til små bokstaver (lcase)',
	'abusefilter-edit-builder-funcs-ccnorm'                 => 'Normaliser forvirrende bokstaver (ccnorm)',
	'abusefilter-edit-builder-funcs-rmdoubles'              => 'Fjern doble bokstaver (rmdoubles)',
	'abusefilter-edit-builder-funcs-specialratio'           => 'Spesialbokstaver / totalt antall bokstaver (specialratio)',
	'abusefilter-edit-builder-funcs-norm'                   => 'Normaliser (norm)',
	'abusefilter-edit-builder-funcs-count'                  => 'Antall ganger streng X finnes i streng Y (count)',
	'abusefilter-edit-builder-group-vars'                   => 'Variabler',
	'abusefilter-edit-builder-vars-accountname'             => 'Kontonavn (on account creation)',
	'abusefilter-edit-builder-vars-action'                  => 'Handling',
	'abusefilter-edit-builder-vars-addedlines'              => 'Linjer lagt til i redigering',
	'abusefilter-edit-builder-vars-delta'                   => 'Størrelsesendring i redigering',
	'abusefilter-edit-builder-vars-diff'                    => 'Enhentlig differanse av endringer i redigering',
	'abusefilter-edit-builder-vars-newsize'                 => 'Ny sidestørrelse',
	'abusefilter-edit-builder-vars-oldsize'                 => 'Gammel sidestørrelse',
	'abusefilter-edit-builder-vars-removedlines'            => 'Linjer fjernet i redigering',
	'abusefilter-edit-builder-vars-summary'                 => 'Redigeringssammendrag',
	'abusefilter-edit-builder-vars-article-id'              => 'Artikkel-ID',
	'abusefilter-edit-builder-vars-article-ns'              => 'Artikkelnavnerom',
	'abusefilter-edit-builder-vars-article-text'            => 'Artikkeltittel (uten navnerom)',
	'abusefilter-edit-builder-vars-article-prefixedtext'    => 'Full artikkeltittel',
	'abusefilter-edit-builder-vars-movedfrom-id'            => 'Artikkel-ID til kildeside ved flytting',
	'abusefilter-edit-builder-vars-movedfrom-ns'            => 'Navnerom til målside ved flytting',
	'abusefilter-edit-builder-vars-movedfrom-text'          => 'Tittel til kildeside ved flytting',
	'abusefilter-edit-builder-vars-movedfrom-prefixedtext'  => 'Full tittel til kildeside ved flytting',
	'abusefilter-edit-builder-vars-movedto-id'              => 'Artikkel-ID til målside ved flytting',
	'abusefilter-edit-builder-vars-movedto-ns'              => 'Navnerom til målside ved flytting',
	'abusefilter-edit-builder-vars-movedto-text'            => 'Tittel til målside ved flytting',
	'abusefilter-edit-builder-vars-movedto-prefixedtext'    => 'Full tittel til målside ved flytting',
	'abusefilter-edit-builder-vars-user-editcount'          => 'Brukers redigeringsteller',
	'abusefilter-edit-builder-vars-user-age'                => 'Kontoalder',
	'abusefilter-edit-builder-vars-user-name'               => 'Kontonavn',
	'abusefilter-edit-builder-vars-user-groups'             => 'Grupper (inkludert implisitte) bruker er i',
	'abusefilter-edit-builder-vars-user-emailconfirm'       => 'Tid e-postadresse ble bekreftet',
	'abusefilter-history'                                   => 'Historikk for filteret $1',
	'abusefilter-history-hidden'                            => 'skjult',
	'abusefilter-history-enabled'                           => 'slått på',
	'abusefilter-history-timestamp'                         => 'Tid',
	'abusefilter-history-user'                              => 'Bruker',
	'abusefilter-history-public'                            => 'Offentlig filterbeskrivelse',
	'abusefilter-history-flags'                             => 'Flagg',
	'abusefilter-history-filter'                            => 'Filterregel',
	'abusefilter-history-comments'                          => 'Kommentarer',
	'abusefilter-history-actions'                           => 'Handlinger',
	'abusefilter-history-backedit'                          => 'Tilbake til filterredigering',
	'abusefilter-history-backlist'                          => 'Tilbake til filterliste',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'abusefilter-desc'                         => "Aplica d'euristicas automaticas a las modificacions",
	'abusefilter'                              => 'Configuracion del filtre dels abuses',
	'abuselog'                                 => 'Jornal dels abuses',
	'abusefilter-warning'                      => "<big>'''Avertiment'''</big> : Aquesta accion es estada identificada automaticament coma nusibla.
Las edicions que son pas constructivas seràn rapidament anullada,
e la repeticion de las asinadas del meteis genre provocarà lo blocatge de vòstre compte.
Se sètz convençut(uda) que vòstra modificacion es constructiva, la podètz la sometre un còp de mai per la validar.
Vaquí la descripcion brèva de la règla de l’abús qu'a detectat vòstra accion : $1",
	'abusefilter-disallowed'                   => 'Aquesta modificacion es estada automaticament idenficada coma nusibla e, per via de consequéncia, pas permesa.
Se sètz convençut(uda) que vòstra modificacion èra constructiva, contactatz un administrator, e informatz-lo de quina accion eratz a far : $1',
	'abusefilter-blocked-display'              => "Aquesta accion es estada identifcada coma nusibla automaticament, e ja sètz estat(ada) empachat(ada) de l’executar.
En consequéncia, per protegir {{SITENAME}}, vòstre compte d'utilizaire e totas las adreças IP son estadas blocadas en escritura.
S'aquò es degut a una error, contactatz un administrator.
Vaquí la descripcion brèva de la règla de l’abús qu'a detectat vòstra accion : $1",
	'abusefilter-degrouped'                    => "Aquesta accion es estada identificada coma nusibla automaticament.
En consequéncia, es pas estada permesa, tre alara, vòstre compte es suspectat de compromission, totes vòstres dreches son estats levats.
Se sètz convençut(uda) qu'aquò es degut a una error, contactatz un burocrata amb una explicacion d'aquesta accion, e totes vòstres dreches poiràn èsser restablits.
Vaquí la descripcion brèva de la règla de l’abús qu'a detectat vòstra accion : $1",
	'abusefilter-autopromote-blocked'          => 'Aquesta accion es estada automaticament identificada coma nusibla, e es pas estada permesa.
En consequéncia, a títol de mesura de seguretat, qualques privilègis acordats de costuma pels comptes establits son estats revocats temporàriament de vòstre compte.
Una descripcion brèva de la règla d’abús que vòstra accion a desenclavat es : $1',
	'abusefilter-blocker'                      => 'Filtre dels abuses',
	'abusefilter-blockreason'                  => 'Blocat automaticament per aver temptat de far de modificacions identificadas coma nusiblas.
Descripcion de la règla : $1',
	'abusefilter-degroupreason'                => 'Dreches levats automaticament pel filtre dels abuses. Descripcion de la règla : $1',
	'abusefilter-accountreserved'              => "Lo nom d'aqueste compte es reservat per l’usatge pel filtre dels abuses.",
	'right-abusefilter-modify'                 => 'Modificar los filtres dels abuses',
	'right-abusefilter-view'                   => 'Veire los filtres dels abuses',
	'right-abusefilter-log'                    => 'Veire lo jornal dels abuses',
	'right-abusefilter-log-detail'             => 'Veire las entradas del jornal detalhat dels abuses',
	'right-abusefilter-private'                => 'Veire las donadas privadas dins lo jornal dels abuses',
	'abusefilter-log'                          => 'Jornal del filtre dels abuses',
	'abusefilter-log-search'                   => 'Recercar lo jornal dels abuses',
	'abusefilter-log-search-user'              => 'Utilizaire :',
	'abusefilter-log-search-filter'            => 'Filtre ID :',
	'abusefilter-log-search-title'             => 'Títol :',
	'abusefilter-log-search-submit'            => 'Recercar',
	'abusefilter-log-entry'                    => '$1 : $2 a desenclavat un filtre dels abuses, que fa un $3 sus $4. Accions presas : $5 ; Descripcion del filtre : $6',
	'abusefilter-log-detailedentry'            => '$1 : $2 a desenclavat lo filtre $3 dels abuses, que fa un $4 sus $5. Accions presas : $6 ; Descripcion del filtre : $7 ($8)',
	'abusefilter-log-detailslink'              => 'detalhs',
	'abusefilter-log-details-legend'           => "Detalhs per l'entrada $1 del jornal",
	'abusefilter-log-details-var'              => 'Variabla',
	'abusefilter-log-details-val'              => 'Valor',
	'abusefilter-log-details-vars'             => 'Paramètres de l’accion',
	'abusefilter-log-details-private'          => 'Donada privada',
	'abusefilter-log-details-ip'               => 'Provenéncia de l’adreça IP',
	'abusefilter-log-noactions'                => 'pas cap',
	'abusefilter-management'                   => 'Gestion del filtre dels abuses',
	'abusefilter-list'                         => 'Totes los filtres',
	'abusefilter-list-id'                      => 'Filtre ID',
	'abusefilter-list-status'                  => 'Estatut',
	'abusefilter-list-public'                  => 'Descripcion publica',
	'abusefilter-list-consequences'            => 'Consequéncias',
	'abusefilter-list-visibility'              => 'Visibilitat',
	'abusefilter-list-hitcount'                => 'Aviar lo comptador',
	'abusefilter-list-edit'                    => 'Modificar',
	'abusefilter-list-details'                 => 'Detalhs',
	'abusefilter-hidden'                       => 'Privat',
	'abusefilter-unhidden'                     => 'Public',
	'abusefilter-enabled'                      => 'Activat',
	'abusefilter-disabled'                     => 'Desactivat',
	'abusefilter-hitcount'                     => '$1 {{PLURAL:$1|visita|visitas}}',
	'abusefilter-list-new'                     => 'Filtre novèl',
	'abusefilter-tools-modifiertest-submit'    => 'Tèst',
	'abusefilter-tools'                        => 'Qualques [[Special:AbuseFilter/tools|espleches]] son disponibles per ajudar a la formulacion e al debogatge dels filtres dels abuses.',
	'abusefilter-status'                       => "{{PLURAL:$1|De la darrièra accion|De las $1 darrièras accions}}, $2 ($3 %) an atench lo limit de la condicion definida per $4. $5 ($6 %) {{PLURAL:$5|correspondiá|correspondián}} a un d'aquestes filtres actualament en servici.",
	'abusefilter-edit-subtitle'                => 'Modificacion del filtre $1',
	'abusefilter-edit-status-label'            => 'Estatisticas',
	'abusefilter-edit-status'                  => '{{PLURAL:$1|De la darrièra accion|De las $1 darrièras accions}}, aqueste filtre a atench $2 ($3 %).',
	'abusefilter-edit-throttled'               => "'''Avertiment''' : Aqueste filtre es estat desactivat automaticament per mesura de seguretat. A atench lo limit de correspondéncia a mai de $1 % de las accions.",
	'abusefilter-edit-new'                     => 'Filtre novèl',
	'abusefilter-edit-save'                    => 'Salvar lo filtre',
	'abusefilter-edit-id'                      => 'Filtre ID :',
	'abusefilter-edit-description'             => "Descripcion :
:''(Visibla publicament)''",
	'abusefilter-edit-flags'                   => 'Drapèus :',
	'abusefilter-edit-enabled'                 => 'Activar aqueste filtre',
	'abusefilter-edit-hidden'                  => "Amagar los detalhs d'aqueste filtre a la vista publica",
	'abusefilter-edit-rules'                   => 'Condicions :',
	'abusefilter-edit-notes'                   => "Nòtas :
:''(privat)''",
	'abusefilter-edit-lastmod'                 => 'Filtre modificat en darrièr :',
	'abusefilter-edit-lastuser'                => "Darrièr utilizaire qu'a modificat aqueste filtre :",
	'abusefilter-edit-hitcount'                => 'Visitas del filtre :',
	'abusefilter-edit-consequences'            => 'Accions entrepresas al moment de la visita',
	'abusefilter-edit-action-warn'             => 'Desenclavar aquestas accions aprèp aver balhat un avertiment a l’utilizaire',
	'abusefilter-edit-action-disallow'         => 'Permetre pas l’accion',
	'abusefilter-edit-action-flag'             => 'Marcar la modificacion dins lo jornal dels abuses',
	'abusefilter-edit-action-blockautopromote' => "Revocar l'estatut de compte automaticament confirmat de l’utilizaire",
	'abusefilter-edit-action-degroup'          => 'Levar a l’utilizaire totes los gropes privilegiats',
	'abusefilter-edit-action-block'            => 'Blocar l’utilizaire en escritura',
	'abusefilter-edit-action-throttle'         => 'Desenclavar las accions unicament se l’utilizaire a depassat los limits',
	'abusefilter-edit-throttle-count'          => "Nombre d’accions d'autorizar :",
	'abusefilter-edit-throttle-period'         => 'Periòde de temps :',
	'abusefilter-edit-throttle-seconds'        => '$1 segondas',
	'abusefilter-edit-throttle-groups'         => "Grop detengut per :
:''(un per linha, separat per de virgulas)''",
	'abusefilter-edit-denied'                  => "Podètz pas veire los detalhs d'aqueste filtre perque es amagat a la vista del public",
	'abusefilter-edit-main'                    => 'Paramètres del filtre',
	'abusefilter-edit-done-subtitle'           => 'Filtre modificat',
	'abusefilter-edit-done'                    => 'Avètz salvadas vòstras modificacions amb succès dins lo filtre.

[[Special:AbuseFilter|Retorn]]',
);

/** Polish (Polski)
 * @author Airwolf
 * @author Sp5uhe
 * @author Maikking
 */
$messages['pl'] = array(
	'abusefilter-log-search-user'       => 'Użytkownik',
	'abusefilter-log-search-title'      => 'Tytuł:',
	'abusefilter-log-search-submit'     => 'Szukaj',
	'abusefilter-log-detailslink'       => 'szczegóły',
	'abusefilter-log-details-legend'    => 'Szczegóły: $1',
	'abusefilter-list-edit'             => 'Edytuj',
	'abusefilter-list-details'          => 'Szczegóły',
	'abusefilter-edit-status-label'     => 'Statystyki',
	'abusefilter-edit-flags'            => 'Flagi:',
	'abusefilter-edit-action-block'     => 'Zablokuj użytkownikowi możliwość edycji',
	'abusefilter-edit-throttle-seconds' => '$1 sekund',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'abusefilter-warning'           => "<big>'''ګواښنه'''</big>: همدا کړنه په اتوماتيک ډول زيانمنه وپېژندل شوه.
نارغوونکې سمونې به ډېر ژر پر شا خپلې پخوانۍ بڼې ته واوړي، ورانکاري او په بيا بيا د نارغوونکې سمونې په ترسره کولو سره به ستاسو په کارن-حساب او يا هم کمپيوټر باندې بنديزونه ولګېږي.
که چېرته تاسو په دې ډاډه ياست چې همدا يوه رغوونکې سمونه ده، نو تاسو کولای شی چې پر «سپارل» وټوکۍ ترڅو ستاسو د کړنې پخلی وشي.
د ناوړو کړنو د کړنلارې يوه لنډه څرګندونه چې ستاسو د کړنې همډوله وه، په دې توګه ده: $1",
	'abusefilter-log-search-user'   => 'کارونکی:',
	'abusefilter-log-search-title'  => 'سرليک:',
	'abusefilter-log-search-submit' => 'پلټل',
	'abusefilter-list'              => 'ټول چاڼګران',
	'abusefilter-tools-result'      => 'پايلې؛',
	'abusefilter-edit-flags'        => 'بېرغونه:',
	'abusefilter-edit-notes'        => "يادونې:
:''(شخصي)",
);

/** Tarifit (Tarifit)
 * @author Jose77
 */
$messages['rif'] = array(
	'abusefilter-log-search-submit' => 'Tarzzut',
	'abusefilter-list-edit'         => 'Arri',
);

/** Romanian (Română)
 * @author KlaudiuMihaila
 */
$messages['ro'] = array(
	'abusefilter-desc'                      => 'Aplică euristică automată modificărilor.',
	'abusefilter-log-search-user'           => 'Utilizator:',
	'abusefilter-log-search-filter'         => 'ID filtru:',
	'abusefilter-log-search-title'          => 'Titlu:',
	'abusefilter-log-search-submit'         => 'Caută',
	'abusefilter-log-detailslink'           => 'detalii',
	'abusefilter-log-details-var'           => 'Variabilă',
	'abusefilter-log-details-val'           => 'Valoare',
	'abusefilter-log-details-vars'          => 'Parametrii acţiunii',
	'abusefilter-log-details-private'       => 'Date private',
	'abusefilter-log-details-ip'            => 'Adresa IP de origine',
	'abusefilter-list'                      => 'Toate filtrele',
	'abusefilter-list-id'                   => 'ID filtru',
	'abusefilter-list-status'               => 'Statut',
	'abusefilter-list-public'               => 'Descriere publică',
	'abusefilter-list-consequences'         => 'Consecinţe',
	'abusefilter-list-visibility'           => 'Vizibilitate',
	'abusefilter-list-edit'                 => 'Modifică',
	'abusefilter-list-details'              => 'Detalii',
	'abusefilter-hidden'                    => 'Privat',
	'abusefilter-unhidden'                  => 'Public',
	'abusefilter-enabled'                   => 'Activat',
	'abusefilter-disabled'                  => 'Dezactivat',
	'abusefilter-list-new'                  => 'Filtru nou',
	'abusefilter-tools-modifiertest-submit' => 'Test',
	'abusefilter-edit-subtitle'             => 'Modificare filtru $1',
	'abusefilter-edit-status-label'         => 'Statistici',
	'abusefilter-edit-new'                  => 'Filtru nou',
	'abusefilter-edit-save'                 => 'Salvează filtru',
	'abusefilter-edit-description'          => "Descriere:
:''(publică)''",
	'abusefilter-edit-enabled'              => 'Activează acest filtru',
	'abusefilter-edit-lastuser'             => 'Ultimul utilizator care a modificat acest filtru:',
	'abusefilter-edit-action-disallow'      => 'Nu permite acţiunea',
	'abusefilter-edit-action-block'         => 'Blochează utilizatorul la modificare',
	'abusefilter-edit-throttle-count'       => 'Număr de acţiuni permise:',
	'abusefilter-edit-throttle-period'      => 'Perioadă de timp:',
	'abusefilter-edit-throttle-seconds'     => '$1 secunde',
	'abusefilter-edit-main'                 => 'Parametrii filtrului',
	'abusefilter-edit-done-subtitle'        => 'Filtru modificat',
);

/** Russian (Русский)
 * @author Александр Сигачёв
 * @author Ahonc
 * @author MaxSem
 * @author VasilievVV
 */
$messages['ru'] = array(
	'abusefilter-desc'                         => 'Позволяет применять эвристические фильтры к правкам.',
	'abusefilter'                              => 'Настройка фильтра злоупотреблений',
	'abuselog'                                 => 'Журнал злоупотреблений',
	'abusefilter-warning'                      => "<big>'''Внимание'''</big>. Данное действие было автоматически определено как вредоносное.
Неконструктивные правки будут быстро отменены,
грубые или неоднократные неконструктивную правки приведут к блокировке вашей учётной записи или компьютера.
Если вы уверены, что это конструктивная правка, вы можете нажать «Отправить» ещё раз, подтвердив тем самым правку.
Краткое описание злоупотребления, с которым определено соответствие вашего действия: $1",
	'abusefilter-disallowed'                   => 'Данное действие было автоматически определено как вредоносное,
и потому запрещено.
Если вы уверены, что это конструктивная правка, пожалуйста, обратитесь к администратору и расскажите, что вы собирались сделать.
Краткое описание злоупотребления, с которым определено соответствие вашего действия: $1',
	'abusefilter-blocked-display'              => 'Данное действие было автоматически определено как вредоносное,
вам было запрещено его выполнение.
Кроме того, в целях защиты проекта {{SITENAME}}, ваша учётная запись и связанные с ней IP-адреса были заблокированы.
Если вы видите в этом ошибку, пожалуйста, свяжитесь с администратором.
Краткое описание злоупотребления, с которым определено соответствие вашего действия: $1',
	'abusefilter-degrouped'                    => 'Данное действие было автоматически определено как вредоносное.
Таким образом, действие не было выполнено, ваша учётная запись считается скомпрометированный, с неё сняты все права.
Если вы считаете, что это ошибка, пожалуйста, свяжитесь с бюрократом и объясните ему ваши действия, тогда ваши права будут восстановлены.
Краткое описание злоупотребления, с которым определено соответствие вашего действия: $1',
	'abusefilter-autopromote-blocked'          => 'Данное действие было автоматически определено как вредоносное, и потому запрещено.
Кроме того, в целях безопасности, с вашей учётной записи сняты некоторые привилегии, обычно предоставляемые зарегистрированным учётным записям.
Краткое описание злоупотребления, с которым определено соответствие вашего действия: $1',
	'abusefilter-blocker'                      => 'Фильтр злоупотреблений',
	'abusefilter-blockreason'                  => 'Автоматически заблокирован фильтром злоупотреблений. Описание правила: $1',
	'abusefilter-degroupreason'                => 'Фильтр злоупотреблений автоматически отобрал права. Описание правила: $1',
	'abusefilter-accountreserved'              => 'Эта учётная запись зарезервирована для использования фильтром злоупотреблений.',
	'right-abusefilter-modify'                 => 'Изменить фильтры злоупотреблений',
	'right-abusefilter-view'                   => 'Просмотреть фильтры злоупотреблений',
	'right-abusefilter-log'                    => 'Просмотреть журнал злоупотреблений',
	'right-abusefilter-log-detail'             => 'Просмотреть подробнее записи журнала злоупотреблений',
	'right-abusefilter-private'                => 'Просмотреть приватные данные в журнале злоупотреблений',
	'abusefilter-log'                          => 'Журнал фильтра злоупотреблений',
	'abusefilter-log-search'                   => 'Поиск в журнале злоупотреблений',
	'abusefilter-log-search-user'              => 'Участник:',
	'abusefilter-log-search-filter'            => 'ИД фильтра:',
	'abusefilter-log-search-title'             => 'Заголовок:',
	'abusefilter-log-search-submit'            => 'Найти',
	'abusefilter-log-entry'                    => '$1: $2 вызвал срабатывание фильтра злоупотреблений, действие «$3» на странице «$4». Принятые меры: $5; описание фильтра: $6',
	'abusefilter-log-detailedentry'            => '$1: $2 вызвал срабатывание фильтра $3, действие «$4» на странице «$5». Принятые меры: $6; описание фильтра: $7 ($8)',
	'abusefilter-log-detailslink'              => 'подробности',
	'abusefilter-log-details-legend'           => 'Подробности записи журнала $1',
	'abusefilter-log-details-var'              => 'Переменная',
	'abusefilter-log-details-val'              => 'Значение',
	'abusefilter-log-details-vars'             => 'Параметры действия',
	'abusefilter-log-details-private'          => 'Приватные данные',
	'abusefilter-log-details-ip'               => 'Исходящий IP-адрес',
	'abusefilter-log-noactions'                => 'нет',
	'abusefilter-management'                   => 'Управление фильтром злоупотреблений',
	'abusefilter-list'                         => 'Все фильтры',
	'abusefilter-list-id'                      => 'ИД фильтра',
	'abusefilter-list-status'                  => 'Состояние',
	'abusefilter-list-public'                  => 'Общедоступное описание',
	'abusefilter-list-consequences'            => 'Последствия',
	'abusefilter-list-visibility'              => 'Видимость',
	'abusefilter-list-hitcount'                => 'Срабатываний',
	'abusefilter-list-edit'                    => 'Править',
	'abusefilter-list-details'                 => 'Подробности',
	'abusefilter-hidden'                       => 'Личное',
	'abusefilter-unhidden'                     => 'Общедоступное',
	'abusefilter-enabled'                      => 'Включён',
	'abusefilter-disabled'                     => 'Выключен',
	'abusefilter-hitcount'                     => '$1 {{PLURAL:$1|срабатывание|срабатывания|срабатываний}}',
	'abusefilter-list-new'                     => 'Новый фильтр',
	'abusefilter-edit-subtitle'                => 'Изменение фильтра $1',
	'abusefilter-edit-status-label'            => 'Статистика',
	'abusefilter-edit-new'                     => 'Новый фильтр',
	'abusefilter-edit-save'                    => 'Сохранить фильтр',
	'abusefilter-edit-id'                      => 'ИД фильтра:',
	'abusefilter-edit-description'             => "Описание:
:''(общедоступное)''",
	'abusefilter-edit-flags'                   => 'Флаги:',
	'abusefilter-edit-enabled'                 => 'Включить этот фильтр',
	'abusefilter-edit-hidden'                  => 'Скрыть подробности этого фильтра от обычных участников',
	'abusefilter-edit-rules'                   => 'Набор правил:',
	'abusefilter-edit-notes'                   => "Примечания:
:''(приватные)",
	'abusefilter-edit-lastmod'                 => 'Последнее изменение фильтра:',
	'abusefilter-edit-lastuser'                => 'Участник, последним изменивший фильтр:',
	'abusefilter-edit-hitcount'                => 'Срабатываний фильтра:',
	'abusefilter-edit-consequences'            => 'Принятых по срабатыванию мер',
	'abusefilter-edit-action-warn'             => 'Принимать эти меры после предупреждения участника',
	'abusefilter-edit-action-disallow'         => 'Запретить действие',
	'abusefilter-edit-action-flag'             => 'Отметить правку в журнале злоупотреблений',
	'abusefilter-edit-action-blockautopromote' => 'Снять с участника статус автоподтверждения',
	'abusefilter-edit-action-degroup'          => 'Исключить участника из всех привилегированных групп',
	'abusefilter-edit-action-block'            => 'Заблокировать участника',
	'abusefilter-edit-action-throttle'         => 'Применять меры только если участник превышает предел',
	'abusefilter-edit-throttle-count'          => 'Количество разрешённых действий:',
	'abusefilter-edit-throttle-period'         => 'Отрезок времени:',
	'abusefilter-edit-throttle-seconds'        => '$1 секунд',
	'abusefilter-edit-throttle-groups'         => "Группа сжатая:
:''(по одной на строке, в сочетании с запятыми)''",
	'abusefilter-edit-denied'                  => 'Вы не можете просмотреть подробную информацию об этом фильтре, так как она скрыта от обычных участников.',
	'abusefilter-edit-main'                    => 'Параметры фильтра',
	'abusefilter-edit-done-subtitle'           => 'Фильтр исправлен',
	'abusefilter-edit-done'                    => 'Вы успешно сохранили изменения в фильтре.

[[Special:AbuseFilter|Вернуться]]',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'abusefilter-desc'                                      => 'Vykonáva automatickú heuristiku úprav.',
	'abusefilter'                                           => 'Nastavenie filtra zneužití',
	'abuselog'                                              => 'Záznam zneužití',
	'abusefilter-warning'                                   => "<big>'''Upozornenie'''</big>: Táto činnosť bola automaticky identifikovaná ako škodlivá.
Nekonštruktívne úpravy budú rýchlo vrátené a zjavné alebo opakované nekonštruktívne zásahy budú mať za následok zablokovanie vášho účtu alebo počítača. Ak veríte, že je táto úprava konštruktívna, môžete znova kliknúť na Uložiť, čím ju potvrdíte.
Stručný popis pravidla zneužitia, ktoré zachytilo vašu úpravu, je: $1",
	'abusefilter-disallowed'                                => 'Táto činnosť bola automaticky identifikovaná ako škodlivá a preto bola odmietnutá.
Ak veríte, že je táto úprava konštruktívna, kontaktujte prosím správcu a oznámte im, čo ste sa pokúšali urobiť.
Stručný popis pravidla zneužitia, ktoré zachytilo vašu úpravu, je: $1',
	'abusefilter-blocked-display'                           => 'Táto činnosť bola automaticky identifikovaná ako škodlivá a preto bola odmietnutá.
Naviac, na ochranu {{GRAMMAR:genitív|{{SITENAME}}}} boli zablokované úpravy z vášho používateľského účtu a všetkých príslušných IP adries.
Ak veríte, že to je omyl, kontaktujte prosím správcu.
Stručný popis pravidla zneužitia, ktoré zachytilo vašu úpravu, je: $1',
	'abusefilter-degrouped'                                 => 'Táto činnosť bola automaticky identifikovaná ako škodlivá.
Následne bola odmietnutá a pretože existuje podozrenie, že váš účet bol zneužitý, všetky práva mu boli odobrané.
Ak veríte, že to je omyl, kontaktujte prosím byrokrata, vysvetlite mu, čo ste sa pokúšali urobiť a môže obnoviť vaše práva.
Stručný popis pravidla zneužitia, ktoré zachytilo vašu úpravu, je: $1',
	'abusefilter-autopromote-blocked'                       => 'Táto činnosť bola automaticky identifikovaná ako škodlivá a preto bola odmietnutá.
Naviac, ako bezpečnostné opatrenie, boli vášmu účtu dočasne odobrané niektoré oprávnenia, ktoré sa bežne prideľujú dôveryhodným účtom.
Stručný popis pravidla zneužitia, ktoré zachytilo vašu úpravu, je: $1',
	'abusefilter-blocker'                                   => 'Filter zneužití',
	'abusefilter-blockreason'                               => 'Automaticky zachytené filtrom zneužití. Popis pravidla: $1',
	'abusefilter-degroupreason'                             => 'Práva automaticky odobral filter zneužívania. Popis pravidla: $1',
	'abusefilter-accountreserved'                           => 'Tento názov účtu je vyhradený pre použitie filtrom zneužití.',
	'right-abusefilter-modify'                              => 'Zmeniť filtre zneužití',
	'right-abusefilter-view'                                => 'Zobraziť filtre zneužití',
	'right-abusefilter-log'                                 => 'Zobraziť záznam zneužití',
	'right-abusefilter-log-detail'                          => 'Zobraziť podrobnosti položiek záznamu zneužití',
	'right-abusefilter-private'                             => 'Zobraziť osobné údaje v zázname zneužití',
	'abusefilter-log'                                       => 'Záznam filtra zneužití',
	'abusefilter-log-search'                                => 'Hľadať v zázname filtra zneužití',
	'abusefilter-log-search-user'                           => 'Používateľ:',
	'abusefilter-log-search-filter'                         => 'ID filtra:',
	'abusefilter-log-search-title'                          => 'Názov:',
	'abusefilter-log-search-submit'                         => 'Hľadať',
	'abusefilter-log-entry'                                 => '$1: $2 spustil filter zneužití, pri vykonávaní $3 na $4. Opatrenia: $5; Popis filtra: $6',
	'abusefilter-log-detailedentry'                         => '$1: $2 spustil filter $3, pri vykonávaní $4 na $5. Opatrenia: $6; Popis filtra: $7 ($8)',
	'abusefilter-log-detailslink'                           => 'podrobnosti',
	'abusefilter-log-details-legend'                        => 'Podrobnosti položky záznamu $1',
	'abusefilter-log-details-var'                           => 'Premenná',
	'abusefilter-log-details-val'                           => 'Hodnota',
	'abusefilter-log-details-vars'                          => 'Parametre operácie',
	'abusefilter-log-details-private'                       => 'Osobné údaje',
	'abusefilter-log-details-ip'                            => 'Zdrojová IP adresa',
	'abusefilter-log-noactions'                             => 'žiadne',
	'abusefilter-management'                                => 'Správa filtra zneužití',
	'abusefilter-list'                                      => 'Všetky filtre',
	'abusefilter-list-id'                                   => 'ID filtra',
	'abusefilter-list-status'                               => 'Stav',
	'abusefilter-list-public'                               => 'Verejný popis',
	'abusefilter-list-consequences'                         => 'Následky',
	'abusefilter-list-visibility'                           => 'Viditeľnosť',
	'abusefilter-list-hitcount'                             => 'Počet zásahov',
	'abusefilter-list-edit'                                 => 'upraviť',
	'abusefilter-list-details'                              => 'Podrobnosti',
	'abusefilter-hidden'                                    => 'Súkromné',
	'abusefilter-unhidden'                                  => 'Verejné',
	'abusefilter-enabled'                                   => 'Zapnuté',
	'abusefilter-disabled'                                  => 'Vypnuté',
	'abusefilter-hitcount'                                  => '$1 {{PLURAL:$1|zásah|zásahov}}',
	'abusefilter-list-new'                                  => 'Nový filter',
	'abusefilter-tools-modifiertest-submit'                 => 'Otestovať',
	'abusefilter-tools'                                     => 'Sú dostupné [[Special:AbuseFilter/tools|nástroje]] pomáhajúce pri tvorbe a ladení filtrov zneužití.',
	'abusefilter-tools-subtitle'                            => 'Nástroje',
	'abusefilter-tools-text'                                => 'Tu sa nachádzajú niektoré nástroje, ktoré možno využiť pri tvorbe a ladení filtrov zneužitia.
[[Special:AbuseFilter|Návrat do hlavnej ponuky]]',
	'abusefilter-tools-expr'                                => 'Tester výrazov',
	'abusefilter-tools-submitexpr'                          => 'Vyhodnotiť',
	'abusefilter-status'                                    => '{{PLURAL:$1|Posledná $1 operácia|Z posledných $1 operácií}} $2 ($3 %) {{PLURAL:$4|dosiahla|dosiahli|dosiahlo}} hraničnú podmienku $4. $5 ($6 %) {{PLURAL:$5|zodpovedala|zodpovedali|zodpovedalo}} momentálne zapnutým filtrom.',
	'abusefilter-edit-subtitle'                             => 'Úprava filtra $1',
	'abusefilter-edit-status-label'                         => 'Štatistika',
	'abusefilter-edit-status'                               => '{{PLURAL:$1|Z poslednej $1 operácie|Z posledných $1 operácií}} tomuto filtru {{PLURAL:$2|zodpovedala|zodpovedali|zodpovedalo}} $2 ($3 %).',
	'abusefilter-edit-throttled'                            => "'''Upozornenie''': V rámci bezpečnostných opatrení bol tento filter automaticky vypnutý. Dosiahol hodnotu obmedzenia $1 % operácií, ktoré mu zodpovedajú.",
	'abusefilter-edit-new'                                  => 'Nový filter',
	'abusefilter-edit-save'                                 => 'Uložiť filter',
	'abusefilter-edit-id'                                   => 'ID filtra:',
	'abusefilter-edit-description'                          => "Popis:
:''(verejne viditeľný)''",
	'abusefilter-edit-flags'                                => 'Príznaky:',
	'abusefilter-edit-enabled'                              => 'Zapnúť tento filter',
	'abusefilter-edit-hidden'                               => 'Skryť verejné zobrazovanie podrobností filtra',
	'abusefilter-edit-rules'                                => 'Pravidlá:',
	'abusefilter-edit-notes'                                => "Poznámky:
:''(súkromný)''",
	'abusefilter-edit-lastmod'                              => 'Posledná zmena filtra:',
	'abusefilter-edit-lastuser'                             => 'Poslednú zmenu filtra vykonal:',
	'abusefilter-edit-hitcount'                             => 'Počet zásahov filtra:',
	'abusefilter-edit-consequences'                         => 'Opatrenia vykonané pri zásahu',
	'abusefilter-edit-action-warn'                          => 'Spustiť tieto operácie po varovaní používateľa',
	'abusefilter-edit-action-disallow'                      => 'Zamietnuť používateľovi vykonať operáciu',
	'abusefilter-edit-action-flag'                          => 'Označiť úpravu v zázname zneužití',
	'abusefilter-edit-action-blockautopromote'              => 'Odobrať používateľovi stav „zaregistrovaný”',
	'abusefilter-edit-action-degroup'                       => 'Odstrániť používateľa zo všetkých privilegovaných skupín',
	'abusefilter-edit-action-block'                         => 'Zablokovať úpravy používateľa a/alebo IP adresy',
	'abusefilter-edit-action-throttle'                      => 'Spustiť operáciu iba ak používateľ dosiahne limit rýchlosti úprav',
	'abusefilter-edit-throttle-count'                       => 'Počet povolených operácií:',
	'abusefilter-edit-throttle-period'                      => 'Časový interval:',
	'abusefilter-edit-throttle-seconds'                     => '$1 sekúnd',
	'abusefilter-edit-throttle-groups'                      => "Obmedzenie rýchlosti úprav skupiny:
:''(jedna na riadok, viaceré oddelené čiarkami)''",
	'abusefilter-edit-denied'                               => 'Nemôžete zobraziť podrobnosti toho filtra, pretože jeho verejné zobrazovanie je vypnuté',
	'abusefilter-edit-main'                                 => 'Parametre filtra',
	'abusefilter-edit-done-subtitle'                        => 'Filter bol upravený',
	'abusefilter-edit-done'                                 => 'Úspešne ste uložili zmeny filtra.

[[Special:AbuseFilter|Vrátiť sa späť]]',
	'abusefilter-edit-badsyntax'                            => 'Filter, ktorý ste zadali, obsahuje syntaktickú chybu. Výstup syntaktického analyzátora: <pre>$1</pre>',
	'abusefilter-edit-viewhistory'                          => 'Zobraziť históriu tohto filtra',
	'abusefilter-edit-history'                              => 'História',
	'abusefilter-edit-check'                                => 'Skontrolovať syntax',
	'abusefilter-edit-builder-select'                       => 'Vyberte voľbu, ktorá sa pridá na miesto, kde je kurzor',
	'abusefilter-edit-builder-group-op-arithmetic'          => 'Aritmetické operátory',
	'abusefilter-edit-builder-op-arithmetic-addition'       => 'Sčítanie (+)',
	'abusefilter-edit-builder-op-arithmetic-subtraction'    => 'Odčítanie (-)',
	'abusefilter-edit-builder-op-arithmetic-multiplication' => 'Násobenie (*)',
	'abusefilter-edit-builder-op-arithmetic-divide'         => 'Delenie (/)',
	'abusefilter-edit-builder-op-arithmetic-modulo'         => 'Modulo (%)',
	'abusefilter-edit-builder-op-arithmetic-pow'            => 'Umocnenie (**)',
	'abusefilter-edit-builder-group-op-comparison'          => 'Operátory porovnávania',
	'abusefilter-edit-builder-op-comparison-equal'          => 'Rovná sa (==)',
	'abusefilter-edit-builder-op-comparison-notequal'       => 'Nerovná sa (!=)',
	'abusefilter-edit-builder-op-comparison-lt'             => 'Menší ako (<)',
	'abusefilter-edit-builder-op-comparison-gt'             => 'Väčší ako (>)',
	'abusefilter-edit-builder-op-comparison-lte'            => 'Menší alebo rovný ako (<=)',
	'abusefilter-edit-builder-op-comparison-gte'            => 'Väčší alebo rovný ako (>=)',
	'abusefilter-edit-builder-group-op-bool'                => 'Operátory pravdivostných hodnôt',
	'abusefilter-edit-builder-op-bool-not'                  => 'Negácia (!)',
	'abusefilter-edit-builder-op-bool-and'                  => 'logický súčin (&)',
	'abusefilter-edit-builder-op-bool-or'                   => 'logický súčet (|)',
	'abusefilter-edit-builder-group-misc'                   => 'Rôzne',
	'abusefilter-edit-builder-misc-ternary'                 => 'Ternárny operátor (1 ? 2 : 3)',
	'abusefilter-edit-builder-misc-in'                      => 'reťazec obsahuje (in)',
	'abusefilter-edit-builder-misc-like'                    => 'Zodpovedá regulárnemu výrazu (like)',
	'abusefilter-edit-builder-group-funcs'                  => 'Funkcie',
	'abusefilter-edit-builder-funcs-length'                 => 'Dĺžka reťazca (length)',
	'abusefilter-edit-builder-funcs-lcase'                  => 'Na malé písmená (lcase)',
	'abusefilter-edit-builder-funcs-ccnorm'                 => 'Normalizovať zameniteľné znaky (ccnorm)',
	'abusefilter-edit-builder-funcs-rmdoubles'              => 'Odstrániť dvojité znaky (rmdoubles)',
	'abusefilter-edit-builder-funcs-specialratio'           => 'Špeciálne znaky / znakov celkom (specialratio)',
	'abusefilter-edit-builder-funcs-norm'                   => 'Normalizovať (norm)',
	'abusefilter-edit-builder-funcs-count'                  => 'Koľkokrát sa reťazec X nachádza v reťazci Y (count)',
	'abusefilter-edit-builder-group-vars'                   => 'Premenné',
	'abusefilter-edit-builder-vars-accountname'             => 'Názov účtu (on account creation)',
	'abusefilter-edit-builder-vars-action'                  => 'Operácia',
	'abusefilter-edit-builder-vars-addedlines'              => 'Riadky pridané pri úprave',
	'abusefilter-edit-builder-vars-delta'                   => 'Zmena veľkosti pri úprave',
	'abusefilter-edit-builder-vars-diff'                    => 'Zjednotený diff zmien vykonaných pri úprave',
	'abusefilter-edit-builder-vars-newsize'                 => 'Nová veľkosť stránky',
	'abusefilter-edit-builder-vars-oldsize'                 => 'Stará veľkosť stránky',
	'abusefilter-edit-builder-vars-removedlines'            => 'Riadky odstránené pri úprave',
	'abusefilter-edit-builder-vars-summary'                 => 'Zhrnutie úprav/zdôvodnenie',
	'abusefilter-edit-builder-vars-article-id'              => 'ID článku',
	'abusefilter-edit-builder-vars-article-ns'              => 'Menný priestor článkov',
	'abusefilter-edit-builder-vars-article-text'            => 'Názov článku (bez menného priestoru)',
	'abusefilter-edit-builder-vars-article-prefixedtext'    => 'Plný názov článku',
	'abusefilter-edit-builder-vars-movedfrom-id'            => 'ID článku presunutia zdrojovej stránky',
	'abusefilter-edit-builder-vars-movedfrom-ns'            => 'Menný priestor presunutia zdrojovej stránky',
	'abusefilter-edit-builder-vars-movedfrom-text'          => 'Názov presunutia zdrojovej stránky',
	'abusefilter-edit-builder-vars-movedfrom-prefixedtext'  => 'Plný názov presunutia zdrojovej stránky',
	'abusefilter-edit-builder-vars-movedto-id'              => 'ID článku presunutia cieľovej stránky',
	'abusefilter-edit-builder-vars-movedto-ns'              => 'Menný priestor presunutia cieľovej stránky',
	'abusefilter-edit-builder-vars-movedto-text'            => 'Názov presunutia cieľovej stránky',
	'abusefilter-edit-builder-vars-movedto-prefixedtext'    => 'Plný názov presunutia cieľovej stránky',
	'abusefilter-edit-builder-vars-user-editcount'          => 'Počet úprav používateľa',
	'abusefilter-edit-builder-vars-user-age'                => 'Vek používateľského účtu',
	'abusefilter-edit-builder-vars-user-name'               => 'Názov používateľského účtu',
	'abusefilter-edit-builder-vars-user-groups'             => 'Skupiny (vrátane implicitných), v ktorých sa používateľ nachádza',
	'abusefilter-edit-builder-vars-user-emailconfirm'       => 'Emailová adresa bola potvrdená',
	'abusefilter-history'                                   => 'História filtra $1',
	'abusefilter-history-hidden'                            => 'skrytý',
	'abusefilter-history-enabled'                           => 'zapnutý',
	'abusefilter-history-timestamp'                         => 'Čas',
	'abusefilter-history-user'                              => 'Používateľ',
	'abusefilter-history-public'                            => 'Verejný popis filtra',
	'abusefilter-history-flags'                             => 'Príznaky',
	'abusefilter-history-filter'                            => 'Pravidlo filtra',
	'abusefilter-history-comments'                          => 'Komentáre',
	'abusefilter-history-actions'                           => 'Operácie',
	'abusefilter-history-backedit'                          => 'Späť do editora filtrov',
	'abusefilter-history-backlist'                          => 'Späť na zoznam filtrov',
);

/** Swedish (Svenska)
 * @author M.M.S.
 * @author Boivie
 */
$messages['sv'] = array(
	'abusefilter-desc'                                      => 'Lägger till automatiska heuristiker till redigeringar.',
	'abusefilter'                                           => 'Konfiguration av missbruksfilter',
	'abuselog'                                              => 'Missbrukslogg',
	'abusefilter-warning'                                   => "<big>'''Varning:'''</big> Denna handling har automatiskt identifierats som skadlig.
Ej konstruktiva redigeringar kommer snabbt att återställas,
och långvaring förstörande redigering kommer leda till att ditt konto eller dator blir blockerad.
Om du menar att denna redigering är konstruktiv, ska du klicka på \"Spara\" igen för att bekräfta det.
En kortfattad beskrivning av missbruksregler som matchar med din handling är: \$1",
	'abusefilter-disallowed'                                => 'Denna handling har automatiskt identifierats som skadlig,
och tillåts därför inte.
Om du menar att din redigering var konstruktiv, var god kontakta en administratör och informera den om vad du prövade att göra.
En kortfattad beskrivning av missbruksregler som din handling matchar med är: $1',
	'abusefilter-blocked-display'                           => 'Denna handling har automatiskt identifierats som skadlig,
och du har blivit hindrad från att genomföra den.
I tillägg, för att skydda {{SITENAME}}, har ditt användarkonto och alla associerade IP-adresser blivit blockerade från att redigera.
Om detta är ett fel, var god kontakta en administratör.
En kortfattad beskrivning av missbruksregler som din handling matchar med är: $1',
	'abusefilter-degrouped'                                 => 'Denna handling har automatiskt identifierats som skadlig.
Därför är den inte tillåten, och på grund av misstanke om missbruk har ditt konto mist alla sina rättighetet.
Om du menar att detta är fel, var god kontakta en byråkrat med en förklaring på vad du gjorde, och dina rättigheter kan återställas.
En kortfattad beskrivning av missbruksregler som din handling matchar med är: $1',
	'abusefilter-autopromote-blocked'                       => 'Denna handling har automatiskt identifierats som skadlig, och är inte tillåten.
I tillägg blev några av ditt kontos rättigheter borttagna temporärt.
En kortfattad beskrivning av missbruksregler som din handling matchar med är: $1',
	'abusefilter-blocker'                                   => 'Missbruksfilter',
	'abusefilter-blockreason'                               => 'Automatiskt blockerad av missbruksfiltret. Regelbeskrivning: $1',
	'abusefilter-degroupreason'                             => 'Behörigheter borttagna automatisk av missbruksfilter. Regelbeskrivning: $1',
	'abusefilter-accountreserved'                           => 'Detta kontot är reserverat för användning av missbruksfiltret.',
	'right-abusefilter-modify'                              => 'Ändra missbruksfilter',
	'right-abusefilter-view'                                => 'Visa missbruksfilter',
	'right-abusefilter-log'                                 => 'Visa missbruksloggen',
	'right-abusefilter-log-detail'                          => 'Visa detaljerade element i missbruksloggen',
	'right-abusefilter-private'                             => 'Visa privat information i missbruksloggen',
	'abusefilter-log'                                       => 'Logg för missbruksfilter',
	'abusefilter-log-search'                                => 'Sök i missbruksloggen',
	'abusefilter-log-search-user'                           => 'Användare:',
	'abusefilter-log-search-filter'                         => 'Filter-ID:',
	'abusefilter-log-search-title'                          => 'Titel:',
	'abusefilter-log-search-submit'                         => 'Sök',
	'abusefilter-log-entry'                                 => '$1: $2 utlöste missbruksfiltret genom att göra en $3 på $4. Reaktion: $5; filterbeskrivning: $6',
	'abusefilter-log-detailedentry'                         => '$1: $2 utlöste missbruksfilter $3, genom att göra en $4 på $5. Reaktion: $6; filterbeskrivning: $7 ($8)',
	'abusefilter-log-detailslink'                           => 'detaljer',
	'abusefilter-log-details-legend'                        => 'Detaljer för loggelement $1',
	'abusefilter-log-details-var'                           => 'Variabel',
	'abusefilter-log-details-val'                           => 'Värde',
	'abusefilter-log-details-vars'                          => 'Handlingsparametrar',
	'abusefilter-log-details-private'                       => 'Privat information',
	'abusefilter-log-details-ip'                            => 'Upphovs-IP',
	'abusefilter-log-noactions'                             => 'ingen',
	'abusefilter-management'                                => 'Behandling av missbruksfilter',
	'abusefilter-list'                                      => 'Alla filter',
	'abusefilter-list-id'                                   => 'Filter-ID',
	'abusefilter-list-status'                               => 'Status',
	'abusefilter-list-public'                               => 'Allmän beskrivning',
	'abusefilter-list-consequences'                         => 'Konsekvenser',
	'abusefilter-list-visibility'                           => 'Synlighet',
	'abusefilter-list-hitcount'                             => 'Träffräknare',
	'abusefilter-list-edit'                                 => 'Redigera',
	'abusefilter-list-details'                              => 'Detaljer',
	'abusefilter-hidden'                                    => 'Privat',
	'abusefilter-unhidden'                                  => 'Allmän',
	'abusefilter-enabled'                                   => 'Påslagen',
	'abusefilter-disabled'                                  => 'Avslagen',
	'abusefilter-hitcount'                                  => '$1 {{PLURAL:$1|träff|träffar}}',
	'abusefilter-list-new'                                  => 'Nytt filter',
	'abusefilter-tools-modifiertest-submit'                 => 'Testa',
	'abusefilter-tools'                                     => 'Några [[Special:AbuseFilter/tools|verktyg]] finns tillgängliga för att hjälpa till med formulering och felsökning av missbruksfilter.',
	'abusefilter-tools-subtitle'                            => 'Verktyg',
	'abusefilter-tools-text'                                => 'Här är några verktyg som kan vara användbara för att formulera och felsöka i missbruksfilter. [[Special:AbuseFilter|Tillbaka till huvudmenyn]]',
	'abusefilter-tools-expr'                                => 'Uttryckstestare',
	'abusefilter-tools-submitexpr'                          => 'Utvärdera',
	'abusefilter-status'                                    => 'Av {{PLURAL:$1|den senaste handlingen|de $1 senaste handlingarna}} har $2 ($3%) nått gränsvärdet $4. $5 ($6%) har matchat ett av de filter som för närvarande är påslagna.',
	'abusefilter-edit-subtitle'                             => 'Redigerar filtret $1',
	'abusefilter-edit-status-label'                         => 'Statistik',
	'abusefilter-edit-status'                               => 'Av {{PLURAL:$1|den senaste handlingen|de senaste $1 handlingarna}}, så har detta filter matchat $2 ($3%).',
	'abusefilter-edit-throttled'                            => "'''Varning''': Detta filter slogs av automatiskt, som en säkerhetsåtgärd. Det nådde gränsen av att matcha mer än $1% av handlingarna.",
	'abusefilter-edit-new'                                  => 'Nytt filter',
	'abusefilter-edit-save'                                 => 'Spara filter',
	'abusefilter-edit-id'                                   => 'Filter-ID:',
	'abusefilter-edit-description'                          => "Beskrivning:
:''(visas allmänt)''",
	'abusefilter-edit-flags'                                => 'Flaggor:',
	'abusefilter-edit-enabled'                              => 'Slå på detta filter',
	'abusefilter-edit-hidden'                               => 'Dölj detaljer om detta filter',
	'abusefilter-edit-rules'                                => 'Regelverk:',
	'abusefilter-edit-notes'                                => "Noteringar:
:''(privat)",
	'abusefilter-edit-lastmod'                              => 'Filter senast ändrat:',
	'abusefilter-edit-lastuser'                             => 'Senaste användare som ändrade detta filter:',
	'abusefilter-edit-hitcount'                             => 'Filterträffar:',
	'abusefilter-edit-consequences'                         => 'Handlingar som tas vid träff',
	'abusefilter-edit-action-warn'                          => 'Gör dessa handlingar efter att använaren fått en varning',
	'abusefilter-edit-action-disallow'                      => 'Hindra användaren från att utföra handlingen',
	'abusefilter-edit-action-flag'                          => 'Flagga redigeringen i missbruksloggen',
	'abusefilter-edit-action-blockautopromote'              => 'Återta användarnas bekräftad-status',
	'abusefilter-edit-action-degroup'                       => 'Ta bort användaren från alla användargrupper',
	'abusefilter-edit-action-block'                         => 'Blockera användaren och/eller IP-adressen från redigering',
	'abusefilter-edit-action-throttle'                      => 'Genomför handlingar endast om användaren överstiger en limit',
	'abusefilter-edit-throttle-count'                       => 'Antal tillåtna handlingar:',
	'abusefilter-edit-throttle-period'                      => 'Tidsperiod:',
	'abusefilter-edit-throttle-seconds'                     => '$1 sekunder',
	'abusefilter-edit-throttle-groups'                      => "Gruppbegränsning på:
:''(en per rad, kombinera med komman)''",
	'abusefilter-edit-denied'                               => 'Du kan inte se detta filters detaljer, för de är dolda',
	'abusefilter-edit-main'                                 => 'Filterparametrar',
	'abusefilter-edit-done-subtitle'                        => 'Filter redigerat',
	'abusefilter-edit-done'                                 => 'Du har sparat dina ändringar i filtret.

[[Special:AbuseFilter|Tillbaka]]',
	'abusefilter-edit-badsyntax'                            => 'Det är ett syntaxfel i filtret du angav. Resultatet från parsern var: <pre>$1</pre>',
	'abusefilter-edit-viewhistory'                          => 'Visa det här filtrets historik',
	'abusefilter-edit-history'                              => 'Historik',
	'abusefilter-edit-check'                                => 'Kontrollera syntax',
	'abusefilter-edit-builder-select'                       => 'Ange ett alternativ för att lägga till det på markören',
	'abusefilter-edit-builder-group-op-arithmetic'          => 'Aritmetiska operatörer',
	'abusefilter-edit-builder-op-arithmetic-addition'       => 'Addition (+)',
	'abusefilter-edit-builder-op-arithmetic-subtraction'    => 'Subtraktion (-)',
	'abusefilter-edit-builder-op-arithmetic-multiplication' => 'Multiplikation (*)',
	'abusefilter-edit-builder-op-arithmetic-divide'         => 'Division (/)',
	'abusefilter-edit-builder-op-arithmetic-modulo'         => 'Procent (%)',
	'abusefilter-edit-builder-op-arithmetic-pow'            => 'Dignitet (**)',
	'abusefilter-edit-builder-group-op-comparison'          => 'Jämförelseoperatörer',
	'abusefilter-edit-builder-op-comparison-equal'          => 'Lika med (==)',
	'abusefilter-edit-builder-op-comparison-notequal'       => 'Inte lika med (!=)',
	'abusefilter-edit-builder-op-comparison-lt'             => 'Mindre än (<)',
	'abusefilter-edit-builder-op-comparison-gt'             => 'Mer än (>)',
	'abusefilter-edit-builder-op-comparison-lte'            => 'Mindre än eller lika med (<=)',
	'abusefilter-edit-builder-op-comparison-gte'            => 'Mer än eller lika med (>=)',
	'abusefilter-edit-builder-group-op-bool'                => 'Booleska operatörer',
	'abusefilter-edit-builder-op-bool-not'                  => 'Inte (!)',
	'abusefilter-edit-builder-op-bool-and'                  => 'Och (&)',
	'abusefilter-edit-builder-op-bool-or'                   => 'Eller (|)',
	'abusefilter-edit-builder-group-misc'                   => 'Diverse',
	'abusefilter-edit-builder-misc-ternary'                 => 'Trefaldig operatör (1 ? 2 : 3)',
	'abusefilter-edit-builder-misc-in'                      => 'innehållen i sträng (in)',
	'abusefilter-edit-builder-misc-like'                    => 'Matchar med reguljärt uttryck (like)',
	'abusefilter-edit-builder-group-funcs'                  => 'Funktioner',
	'abusefilter-edit-builder-funcs-length'                 => 'Stränglängd (length)',
	'abusefilter-edit-builder-funcs-lcase'                  => 'Gör om till små bokstäver (lcase)',
	'abusefilter-edit-builder-funcs-ccnorm'                 => 'Normalisera förvirrande tecken (ccnorm)',
	'abusefilter-edit-builder-funcs-rmdoubles'              => 'Ta bort dubbla tecken (rmdoubles)',
	'abusefilter-edit-builder-funcs-specialratio'           => 'Specialtecken / totalt antal tecken (specialratio)',
	'abusefilter-edit-builder-funcs-norm'                   => 'Normalisera (norm)',
	'abusefilter-edit-builder-funcs-count'                  => 'Antal gånger sträng X finns i sträng Y (count)',
	'abusefilter-edit-builder-group-vars'                   => 'Variabler',
	'abusefilter-history'                                   => 'Historik för filtret $1',
	'abusefilter-history-hidden'                            => 'dold',
	'abusefilter-history-enabled'                           => 'aktiverad',
	'abusefilter-history-timestamp'                         => 'Tid',
	'abusefilter-history-user'                              => 'Användare',
	'abusefilter-history-public'                            => 'Offentlig filterbeskrivning',
	'abusefilter-history-flags'                             => 'Flaggor',
	'abusefilter-history-filter'                            => 'Filterregel',
	'abusefilter-history-comments'                          => 'Kommentarer',
	'abusefilter-history-actions'                           => 'Handlingar',
	'abusefilter-history-backedit'                          => 'Tillbaka till filterredigering',
	'abusefilter-history-backlist'                          => 'Tillbaka till filterlista',
);

/** Telugu (తెలుగు)
 * @author Veeven
 * @author వైజాసత్య
 */
$messages['te'] = array(
	'abuselog'                          => 'దురుపయోగాల చర్యానివేదిక',
	'abusefilter-blocker'               => 'దురుపయోగాల జల్లెడ',
	'abusefilter-log-search-user'       => 'వాడుకరి:',
	'abusefilter-log-search-title'      => 'శీర్షిక:',
	'abusefilter-log-search-submit'     => 'అన్వేషణ',
	'abusefilter-log-detailslink'       => 'వివరాలు',
	'abusefilter-log-details-val'       => 'విలువ',
	'abusefilter-log-details-ip'        => 'ఉద్భవించిన ఐ.పీ.చిరునామా',
	'abusefilter-list-status'           => 'స్థితి',
	'abusefilter-list-consequences'     => 'పరిణామాలు',
	'abusefilter-list-hitcount'         => 'హిట్ల లెక్క',
	'abusefilter-list-edit'             => 'మార్చు',
	'abusefilter-list-details'          => 'వివరాలు',
	'abusefilter-hidden'                => 'అంతరంగికం',
	'abusefilter-unhidden'              => 'బహిరంగం',
	'abusefilter-enabled'               => 'సచేతనం',
	'abusefilter-disabled'              => 'అచేతనం',
	'abusefilter-list-new'              => 'కొత్త జల్లెడ',
	'abusefilter-edit-subtitle'         => '$1 జల్లెడను దిద్దుతున్నారు',
	'abusefilter-edit-new'              => 'కొత్త జల్లెడ',
	'abusefilter-edit-save'             => 'జల్లెడ భద్రపరచు',
	'abusefilter-edit-id'               => 'జల్లెడ ఐ.డీ:',
	'abusefilter-edit-description'      => "వివరణ:
:''(బహిరంగంగా కనిపిస్తుంది)''",
	'abusefilter-edit-rules'            => 'నియమావళి:',
	'abusefilter-edit-notes'            => "గమనికలు:
:''(అంతరంగికం)",
	'abusefilter-edit-hitcount'         => 'జల్లెడ హిట్లు:',
	'abusefilter-edit-consequences'     => 'హిట్‌పై తీసుకున్న చర్యలు',
	'abusefilter-edit-action-disallow'  => 'ఈ చర్యను నిరాకరించు',
	'abusefilter-edit-action-block'     => 'ఈ వాడుకరిని దిద్దుబాట్లు చేయకుండా నిషేధించు',
	'abusefilter-edit-throttle-seconds' => '$1 క్షణాలు',
);

/** Tajik (Cyrillic) (Тоҷикӣ/tojikī (Cyrillic))
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'abusefilter-log-search-user'   => 'Корбар:',
	'abusefilter-log-search-title'  => 'Унвон:',
	'abusefilter-log-search-submit' => 'Ҷустуҷӯ',
	'abusefilter-log-details-val'   => 'Қимат',
	'abusefilter-list-edit'         => 'Вироиш',
	'abusefilter-tools-result'      => 'Натиҷа:',
);

/** Ukrainian (Українська)
 * @author Ahonc
 * @author AS
 */
$messages['uk'] = array(
	'abusefilter-desc'                         => 'Застосовує до редагувань автоматичні евристики.',
	'abusefilter'                              => 'Налаштування фільтра зловживань',
	'abuselog'                                 => 'Журнал зловживань',
	'abusefilter-warning'                      => "<big>'''Увага'''</big>: Ця дія була автоматично визначена як шкідлива.
Неконструктивні редагування будуть швидко скасовані,
а грубі або неодноразові неконструктивні редагування призведуть до блокування вашого облікового запису або комп'ютера.
Якщо ви вважаєте, що це редагування конструктивне, то ви можете ще раз натиснути «Зберегти сторінку», щоб підтвердити редагування.
Короткий опис зловживання, яке пов'язане з вашою дією: $1",
	'abusefilter-disallowed'                   => "Ця дія автоматично визначена як шкідлива,
і тому заборонена.
Якщо ви вважаєте, що це редагування конструктивне, будь ласка, зверніться до адміністратора і розкажіть йому, що ви хотіли зробити.
Короткий опис зловживання, яке пов'язане з вашою дією: $1",
	'abusefilter-blocked-display'              => "Ця дію була автоматично визначена як шкідлива,
і тому її виконання заборонене.
Окрім того, для захисту проекту {{SITENAME}} ваш обліковий запис і пов'язані з ним IP-адреси були заблоковані.
Якщо ви вважаєте це помилковим, то зв'яжіться з адміністратором.
Короткий опис зловживання, яке пов'язане з вашою дією: $1",
	'abusefilter-degrouped'                    => "Ця дія була автоматично визначена як шкідлива.
Таким чином, дія була скасована, ваш обліковий запис вважається скомпрометованим і в нього відібрано всі права.
Якщо ви вважаєте це помилковим, будь ласка, зв'яжіться з бюрократом і поясніть йому ваші дії, тоді ваші права будуть відновлені.
Короткий опис зловживання, яке пов'язане з вашою дією: $1",
	'abusefilter-autopromote-blocked'          => "Цю дію автоматично визначено, як шкідливу, і тому заборонено.
Крім того, як захід безпеки, у вашого облікового запису тимчасово відібрано деякі привілеї, які звичаєво надаються зареєстрованим обліковим записам.
Короткий опис зловживання, яке пов'язали з вашою дією: $1",
	'abusefilter-blocker'                      => 'Фільтр зловживань',
	'abusefilter-blockreason'                  => 'Автоматично заблокований фільтром зловживань. Опис правила: $1',
	'abusefilter-degroupreason'                => 'Права автоматично відібрані фільтром зловживань. Опис правила: $1',
	'abusefilter-accountreserved'              => 'Цей обліковий запис є зарезервованим для використання фільтром зловживань.',
	'right-abusefilter-modify'                 => 'Налаштувати фільтр зловживань',
	'right-abusefilter-view'                   => 'Переглянути фільтр зловживань',
	'right-abusefilter-log'                    => 'Переглянути журнал зловживань',
	'right-abusefilter-log-detail'             => 'Переглянути деталізовані записи журналу зловживань',
	'right-abusefilter-private'                => 'Переглянути приватні дані у журналі зловживань',
	'abusefilter-log'                          => 'Журнал фільтру зловживань',
	'abusefilter-log-search'                   => 'Пошук в журналі зловживань',
	'abusefilter-log-search-user'              => 'Користувач:',
	'abusefilter-log-search-filter'            => 'Ідентифікатор фільтра:',
	'abusefilter-log-search-title'             => 'Заголовок:',
	'abusefilter-log-search-submit'            => 'Знайти',
	'abusefilter-log-entry'                    => '$1: $2 запустив фільтр зловживань, виконуючи "$3" на сторінці "$4". Прийняті заходи: $5; опис фільтру: $6',
	'abusefilter-log-detailedentry'            => '$1: $2 запустив фільтр $3, виконуючи "$4" на сторінці "$5". Прийняті заходи: $6; опис фільтру: $7 ($8)',
	'abusefilter-log-detailslink'              => 'деталі',
	'abusefilter-log-details-legend'           => 'Деталі журнального запису $1',
	'abusefilter-log-details-var'              => 'Змінна',
	'abusefilter-log-details-val'              => 'Значення',
	'abusefilter-log-details-vars'             => 'Параметри дії',
	'abusefilter-log-details-private'          => 'Приватні дані',
	'abusefilter-log-details-ip'               => 'Вихідна IP-адреса',
	'abusefilter-log-noactions'                => 'нема',
	'abusefilter-management'                   => 'Управління фільтром зловживань',
	'abusefilter-list'                         => 'Усі фільтри',
	'abusefilter-list-id'                      => 'ІД фільтра',
	'abusefilter-list-status'                  => 'Стан',
	'abusefilter-list-public'                  => 'Загальнодоступний опис',
	'abusefilter-list-consequences'            => 'Наслідки',
	'abusefilter-list-visibility'              => 'Видимість',
	'abusefilter-list-hitcount'                => 'Спрацьовувань',
	'abusefilter-list-edit'                    => 'Редагувати',
	'abusefilter-list-details'                 => 'Деталі',
	'abusefilter-hidden'                       => 'Приватне',
	'abusefilter-unhidden'                     => 'Загальнодоступне',
	'abusefilter-enabled'                      => 'Увімкнений',
	'abusefilter-disabled'                     => 'Вимкнений',
	'abusefilter-hitcount'                     => '$1 {{PLURAL:$1|спрацьовування|спрацьовування|спрацьовувань}}',
	'abusefilter-list-new'                     => 'Новий фільтр',
	'abusefilter-tools-modifiertest-submit'    => 'Тест',
	'abusefilter-tools'                        => 'Для допомоги при формулюванні та налагодженні фільтру зловживань є [[Special:AbuseFilter/tools|певні засоби]].',
	'abusefilter-status'                       => 'Серед $1 {{PLURAL:$1|дії|дій}}, $2 ($3%) {{PLURAL:$2|досягла|досягли}} межі $4. $5 ($6%) {{PLURAL:$5|активізувала|активізували}} один з ввімкнених фільтрів.',
	'abusefilter-edit-subtitle'                => 'Редагування фільтру $1',
	'abusefilter-edit-status-label'            => 'Статистика',
	'abusefilter-edit-status'                  => 'З $1 {{PLURAL:$1|останньої дії|останніх дій}} цей фільтр знайшов $2 ($3%) співпадінь.',
	'abusefilter-edit-throttled'               => "'''Попередження''': цей фільтр був автоматично вимкнений у заходах безпеки. Він досяг межі співпадінь у $1% дій.",
	'abusefilter-edit-new'                     => 'Новий фільтр',
	'abusefilter-edit-save'                    => 'Зберегти фільтр',
	'abusefilter-edit-id'                      => 'ІД фильтра:',
	'abusefilter-edit-description'             => "Опис:
:''(загальнодоступне) ''",
	'abusefilter-edit-flags'                   => 'Прапорці:',
	'abusefilter-edit-enabled'                 => 'Увімкнути цей фільтр',
	'abusefilter-edit-hidden'                  => 'Приховати деталі цього фільтру від загальнодоступного огляду',
	'abusefilter-edit-rules'                   => 'Умови:',
	'abusefilter-edit-notes'                   => "Примітки:
:''(приватні)",
	'abusefilter-edit-lastmod'                 => 'Остання зміна фільтру:',
	'abusefilter-edit-lastuser'                => 'Останній, хто змінював фільтр:',
	'abusefilter-edit-hitcount'                => 'Спрацьовувань фільтру:',
	'abusefilter-edit-consequences'            => 'Прийнятих після спрацьовування мір',
	'abusefilter-edit-action-warn'             => 'Приймати ці заходи після попередження користувача',
	'abusefilter-edit-action-disallow'         => 'Заборонити користувачеві виконувати дію в питанні',
	'abusefilter-edit-action-flag'             => 'Позначити редагування в журналі зловживань',
	'abusefilter-edit-action-blockautopromote' => 'Зняти з користувача статус автопідтвердження',
	'abusefilter-edit-action-degroup'          => 'Виключити користувача з усіх привілейованих груп',
	'abusefilter-edit-action-block'            => 'Заблокувати користувача та/або IP-адресу',
	'abusefilter-edit-action-throttle'         => 'Приймати міри тільки якщо користувач переходить межу',
	'abusefilter-edit-throttle-count'          => 'Кількість дозволених дій:',
	'abusefilter-edit-throttle-period'         => 'Відтинок часу:',
);

/** Vèneto (Vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'abusefilter-desc' => 'Àplica dele eurìstiche automatiche a le modifiche.',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'abusefilter-list'                  => 'Các bộ lọc',
	'abusefilter-list-id'               => 'ID bộ lọc',
	'abusefilter-list-status'           => 'Trạng thái',
	'abusefilter-list-edit'             => 'Sửa đổi',
	'abusefilter-list-details'          => 'Chi tiết',
	'abusefilter-unhidden'              => 'Công khai',
	'abusefilter-list-new'              => 'Bộ lọc mới',
	'abusefilter-edit-subtitle'         => 'Sửa đổi bộ lọc $1',
	'abusefilter-edit-new'              => 'Bộ lọc mới',
	'abusefilter-edit-save'             => 'Lưu bộ lọc',
	'abusefilter-edit-id'               => 'ID bộ lọc:',
	'abusefilter-edit-rules'            => 'Bộ quy tắc:',
	'abusefilter-edit-action-block'     => 'Cấm người dùng không được sửa đổi',
	'abusefilter-edit-throttle-period'  => 'Thời gian:',
	'abusefilter-edit-throttle-seconds' => '$1 giây',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Chenzw
 */
$messages['zh-hans'] = array(
	'abusefilter-log-search-user' => '用户：',
);

