<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'openatrium',
  1 => 'minimal',
  2 => 'standard',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'field_ui' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'poll' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.41',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'version' => '7.41',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.41',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'version' => '7.41',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.41',
      ),
      'options' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'number' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.41',
      ),
      'list' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.41',
      ),
      'field' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'field.info.class.inc',
            3 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.41',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'version' => '7.41',
      ),
      'menu' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.41',
      ),
      'php' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.41',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'configure' => 'admin/config/development/logging',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'rdf' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'version' => '7.41',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.41',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.41',
      ),
      'file' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7080',
        'version' => '7.41',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7015',
        'version' => '7.41',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.41',
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.41',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.41',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.41',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'image' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'version' => '7.41',
      ),
      'overlay' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'simpletest' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/boot.test',
            6 => 'tests/bootstrap.test',
            7 => 'tests/cache.test',
            8 => 'tests/common.test',
            9 => 'tests/database_test.test',
            10 => 'tests/entity_crud.test',
            11 => 'tests/entity_crud_hook_test.test',
            12 => 'tests/entity_query.test',
            13 => 'tests/error.test',
            14 => 'tests/file.test',
            15 => 'tests/filetransfer.test',
            16 => 'tests/form.test',
            17 => 'tests/graph.test',
            18 => 'tests/image.test',
            19 => 'tests/lock.test',
            20 => 'tests/mail.test',
            21 => 'tests/menu.test',
            22 => 'tests/module.test',
            23 => 'tests/pager.test',
            24 => 'tests/password.test',
            25 => 'tests/path.test',
            26 => 'tests/registry.test',
            27 => 'tests/schema.test',
            28 => 'tests/session.test',
            29 => 'tests/tablesort.test',
            30 => 'tests/theme.test',
            31 => 'tests/unicode.test',
            32 => 'tests/update.test',
            33 => 'tests/xmlrpc.test',
            34 => 'tests/upgrade/upgrade.test',
            35 => 'tests/upgrade/upgrade.comment.test',
            36 => 'tests/upgrade/upgrade.filter.test',
            37 => 'tests/upgrade/upgrade.forum.test',
            38 => 'tests/upgrade/upgrade.locale.test',
            39 => 'tests/upgrade/upgrade.menu.test',
            40 => 'tests/upgrade/upgrade.node.test',
            41 => 'tests/upgrade/upgrade.taxonomy.test',
            42 => 'tests/upgrade/upgrade.trigger.test',
            43 => 'tests/upgrade/upgrade.translatable.test',
            44 => 'tests/upgrade/upgrade.upload.test',
            45 => 'tests/upgrade/upgrade.user.test',
            46 => 'tests/upgrade/update.aggregator.test',
            47 => 'tests/upgrade/update.trigger.test',
            48 => 'tests/upgrade/update.field.test',
            49 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'version' => '7.41',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'php' => '5.2.4',
        ),
        'schema_version' => '7011',
        'version' => '7.41',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'dashboard' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.41',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.41',
      ),
      'contextual' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.41',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.41',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.41',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.41',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'version' => '7.41',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.41',
      ),
    ),
    'themes' => 
    array (
      'seven' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
        ),
        'version' => '7.41',
      ),
      'bartik' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
        ),
        'version' => '7.41',
      ),
      'stark' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
        ),
        'version' => '7.41',
      ),
      'garland' => 
      array (
        'filename' => '/var/aegir/platforms/openatrium2/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.41',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
        ),
        'version' => '7.41',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.41',
        'description' => 'This platform is running Drupal 7.41',
      ),
    ),
    'profiles' => 
    array (
      'openatrium' => 
      array (
        'name' => 'openatrium',
        'filename' => './profiles/openatrium/openatrium.profile',
        'info' => 
        array (
          'name' => 'OpenAtrium',
          'distribution_name' => 'Open Atrium 2',
          'description' => 'A team collaboration platform',
          'core' => '7.x',
          'exclusive' => true,
          'base' => 
          array (
            0 => 'panopoly',
          ),
          'files' => 
          array (
            0 => 'openatrium.profile',
          ),
          'dependencies' => 
          array (
            0 => 'menu',
            1 => 'image',
            2 => 'list',
            3 => 'number',
            4 => 'options',
            5 => 'path',
            6 => 'taxonomy',
            7 => 'search',
            8 => 'shortcut',
            9 => 'field',
            10 => 'field_ui',
            11 => 'file',
            12 => 'update',
            13 => 'panopoly_core',
            14 => 'panopoly_images',
            15 => 'panopoly_theme',
            16 => 'panopoly_magic',
            17 => 'panopoly_widgets',
            18 => 'panopoly_admin',
            19 => 'panopoly_users',
            20 => 'panopoly_pages',
            21 => 'panopoly_search',
            22 => 'panopoly_wysiwyg',
            23 => 'navbar',
            24 => 'backports',
            25 => 'simplified_menu_admin',
            26 => 'save_draft',
            27 => 'module_filter',
            28 => 'date_popup_authored',
            29 => 'views_ui',
            30 => 'oa_core',
            31 => 'oa_access',
            32 => 'oa_adminrole',
            33 => 'oa_buttons',
            34 => 'oa_config',
            35 => 'oa_date',
            36 => 'oa_diff',
            37 => 'oa_layouts',
            38 => 'oa_messages',
            39 => 'oa_news',
            40 => 'oa_panopoly_users',
            41 => 'oa_permissions',
            42 => 'oa_responsive_regions',
            43 => 'oa_river',
            44 => 'oa_section_context',
            45 => 'oa_sections',
            46 => 'oa_teams',
            47 => 'oa_update',
            48 => 'oa_users',
            49 => 'oa_variables',
            50 => 'oa_widgets',
            51 => 'oa_wysiwyg',
            52 => 'radix_layouts',
            53 => 'bootstrap_library',
            54 => 'apps',
            55 => 'features_override',
            56 => 'feeds',
            57 => 'job_scheduler',
            58 => 'libraries',
            59 => 'variable',
            60 => 'panels_customerror',
            61 => 'ultimate_cron',
          ),
          'version' => '7.x-2.50',
          'project' => 'openatrium',
          'datestamp' => '1447964411',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.41',
      ),
      'minimal' => 
      array (
        'name' => 'minimal',
        'filename' => './profiles/minimal/minimal.profile',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.41',
      ),
      'standard' => 
      array (
        'name' => 'standard',
        'filename' => './profiles/standard/standard.profile',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.41',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1445457729',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'version' => '7.41',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
    ),
    'themes' => 
    array (
    ),
  ),
  'profiles' => 
  array (
    'openatrium' => 
    array (
      'modules' => 
      array (
        'oa_brand' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_brand/oa_brand.module',
          'basename' => 'oa_brand.module',
          'name' => 'oa_brand',
          'info' => 
          array (
            'name' => 'Open Atrium Brand',
            'description' => 'Default Branding for Open Atrium',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'oa_core',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'version' => '7.x-2.0',
            'project' => 'oa_brand',
            'datestamp' => '1447959852',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0',
        ),
        'oa_messages_digest' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_messages_digest/oa_messages_digest.module',
          'basename' => 'oa_messages_digest.module',
          'name' => 'oa_messages_digest',
          'info' => 
          array (
            'name' => 'Open Atrium Messages Digest',
            'description' => 'Digest message types for Open Atrium',
            'package' => 'Open Atrium',
            'core' => '7.x',
            'php' => '5.2.4',
            'dependencies' => 
            array (
              0 => 'oa_messages',
              1 => 'message_digest',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'version' => '7.x-2.1',
            'project' => 'oa_messages_digest',
            'datestamp' => '1445354356',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.1',
        ),
        'oa_export' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_export/oa_export.module',
          'basename' => 'oa_export.module',
          'name' => 'oa_export',
          'info' => 
          array (
            'name' => 'Open Atrium Export',
            'description' => 'Allows exporting/importing of a blueprint.',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'version' => '7.x-2.0-beta4',
            'project' => 'oa_export',
            'datestamp' => '1447959553',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0-beta4',
        ),
        'oa_discussion' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_discussion/oa_discussion.module',
          'basename' => 'oa_discussion.module',
          'name' => 'oa_discussion',
          'info' => 
          array (
            'name' => 'Open Atrium Discussion',
            'description' => 'Discussion forums for Open Atrium',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'project' => 'oa_discussion',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'entity',
              2 => 'entityreference',
              3 => 'features',
              4 => 'field_group',
              5 => 'file',
              6 => 'media',
              7 => 'message',
              8 => 'oa_core',
              9 => 'oa_layouts',
              10 => 'oa_messages',
              11 => 'oa_sections',
              12 => 'og',
              13 => 'og_ui',
              14 => 'og_vocab',
              15 => 'options',
              16 => 'page_manager',
              17 => 'panelizer',
              18 => 'panels',
              19 => 'panels_breadcrumbs',
              20 => 'paragraphs',
              21 => 'select2widget',
              22 => 'strongarm',
              23 => 'text',
              24 => 'views',
              25 => 'views_content',
              26 => 'views_load_more',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Built-in Apps',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'field_group:field_group:1',
                1 => 'page_manager:pages_default:1',
                2 => 'panelizer:panelizer:1',
                3 => 'strongarm:strongarm:1',
                4 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_group' => 
              array (
                0 => 'group_oa_access|node|oa_discussion_post|form',
              ),
              'field_instance' => 
              array (
                0 => 'message-oa_reply-field_oa_message_section',
                1 => 'message-oa_reply-field_oa_message_space',
                2 => 'message-oa_reply-field_oa_message_text',
                3 => 'message-oa_reply-field_oa_node_ref',
                4 => 'node-oa_discussion_post-body',
                5 => 'node-oa_discussion_post-field_oa_media',
                6 => 'node-oa_discussion_post-oa_section_ref',
                7 => 'node-oa_discussion_post-og_group_ref',
                8 => 'node-oa_discussion_post-og_vocabulary',
              ),
              'message_type' => 
              array (
                0 => 'oa_reply',
              ),
              'node' => 
              array (
                0 => 'oa_discussion_post',
              ),
              'page_manager_handlers' => 
              array (
                0 => 'node_edit_panel_context_5',
              ),
              'panelizer_defaults' => 
              array (
                0 => 'node:oa_discussion_post:default',
                1 => 'node:oa_discussion_post:default:featured',
                2 => 'node:oa_section:oa_section_discussion',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_oa_discussion_post',
                1 => 'comment_default_mode_oa_discussion_post',
                2 => 'comment_default_per_page_oa_discussion_post',
                3 => 'comment_form_location_oa_discussion_post',
                4 => 'comment_oa_discussion_post',
                5 => 'comment_preview_oa_discussion_post',
                6 => 'comment_subject_field_oa_discussion_post',
                7 => 'field_bundle_settings_message__oa_reply',
                8 => 'field_bundle_settings_node__oa_discussion_post',
                9 => 'language_content_type_oa_discussion_post',
                10 => 'menu_options_oa_discussion_post',
                11 => 'menu_parent_oa_discussion_post',
                12 => 'node_options_oa_discussion_post',
                13 => 'node_preview_oa_discussion_post',
                14 => 'node_submitted_oa_discussion_post',
                15 => 'panelizer_defaults_node_oa_discussion_post',
                16 => 'panelizer_node:oa_discussion_post_allowed_layouts_default',
                17 => 'panelizer_node:oa_discussion_post_allowed_types_default',
                18 => 'panelizer_node:oa_discussion_post_default',
              ),
            ),
            'features_exclude' => 
            array (
              'dependencies' => 
              array (
                'features_template' => 'features_template',
              ),
              'variable' => 
              array (
                'panelizer_node:oa_discussion_post_allowed_layouts' => 'panelizer_node:oa_discussion_post_allowed_layouts',
                'panelizer_node:oa_discussion_post_allowed_types' => 'panelizer_node:oa_discussion_post_allowed_types',
              ),
            ),
            'files' => 
            array (
              0 => 'tests/oa_discussion.test',
            ),
            'version' => '7.x-2.38',
            'datestamp' => '1446649160',
            'php' => '5.2.4',
          ),
          'schema_version' => '7105',
          'version' => '7.x-2.38',
        ),
        'oa_notifications' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_notifications/oa_notifications.module',
          'basename' => 'oa_notifications.module',
          'name' => 'oa_notifications',
          'info' => 
          array (
            'name' => 'Open Atrium Notifications',
            'description' => 'Adds notification functionality to Open Atrium',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'flag',
              2 => 'oa_core',
              3 => 'page_manager',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'page_manager_pages' => 
              array (
                0 => 'user_subscribed_content',
              ),
            ),
            'project path' => 'sites/all/modules/contrib',
            'version' => '7.x-2.26',
            'project' => 'oa_notifications',
            'datestamp' => '1445354646',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-2.26',
        ),
        'oa_markdown' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_markdown/oa_markdown.module',
          'basename' => 'oa_markdown.module',
          'name' => 'oa_markdown',
          'info' => 
          array (
            'name' => 'Open Atrium Markdown',
            'description' => 'Provides a markdown filter for Open Atrium. Warning: switching between markdown and wysiwyg fiter formats may cause issues.',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'markdown',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'filter' => 
              array (
                0 => 'markdown',
              ),
            ),
            'version' => '7.x-2.1',
            'project' => 'oa_markdown',
            'datestamp' => '1445354351',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.1',
        ),
        'oa_related' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_related/oa_related.module',
          'basename' => 'oa_related.module',
          'name' => 'oa_related',
          'info' => 
          array (
            'name' => 'Open Atrium Related Content',
            'description' => 'Adds Related Content functionality to Open Atrium',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'entityreference',
              2 => 'features',
              3 => 'features_template',
              4 => 'file',
              5 => 'list',
              6 => 'media',
              7 => 'oa_core',
              8 => 'options',
              9 => 'paragraphs',
              10 => 'references_dialog',
              11 => 'text',
              12 => 'views',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'oa_related.css',
              ),
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_image_alignment',
                1 => 'field_oa_content_layout',
                2 => 'field_oa_related',
                3 => 'field_oa_related_content',
                4 => 'field_paragraph_layout',
                5 => 'field_paragraph_lock_revision',
                6 => 'field_paragraph_text',
                7 => 'field_snippet_content',
                8 => 'field_snippet_showtitle',
                9 => 'field_snippet_title_override',
                10 => 'field_snippet_viewmode',
              ),
              'field_instance' => 
              array (
                0 => 'paragraphs_item-paragraph_content-field_oa_content_layout',
                1 => 'paragraphs_item-paragraph_content-field_oa_related_content',
                2 => 'paragraphs_item-paragraph_media-field_image_alignment',
                3 => 'paragraphs_item-paragraph_media-field_oa_media',
                4 => 'paragraphs_item-paragraph_snippet-field_paragraph_layout',
                5 => 'paragraphs_item-paragraph_snippet-field_paragraph_lock_revision',
                6 => 'paragraphs_item-paragraph_snippet-field_snippet_content',
                7 => 'paragraphs_item-paragraph_snippet-field_snippet_showtitle',
                8 => 'paragraphs_item-paragraph_snippet-field_snippet_title_override',
                9 => 'paragraphs_item-paragraph_snippet-field_snippet_viewmode',
                10 => 'paragraphs_item-paragraph_text-field_paragraph_layout',
                11 => 'paragraphs_item-paragraph_text-field_paragraph_text',
              ),
              'paragraphs' => 
              array (
                0 => 'paragraph_content',
                1 => 'paragraph_media',
                2 => 'paragraph_snippet',
                3 => 'paragraph_text',
              ),
              'views_view' => 
              array (
                0 => 'open_atrium_references_search',
              ),
            ),
            'features_exclude' => 
            array (
              'dependencies' => 
              array (
                'media_colorbox' => 'media_colorbox',
              ),
            ),
            'version' => '7.x-2.8',
            'project' => 'oa_related',
            'datestamp' => '1446828243',
            'php' => '5.2.4',
          ),
          'schema_version' => '7101',
          'version' => '7.x-2.8',
        ),
        'oa_subspaces' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_subspaces/oa_subspaces.module',
          'basename' => 'oa_subspaces.module',
          'name' => 'oa_subspaces',
          'info' => 
          array (
            'name' => 'Open Atrium Subspaces',
            'description' => 'Provides ability to add subspaces to spaces and inherit membership.',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'project' => 'oa_subspaces',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'entityreference',
              2 => 'features',
              3 => 'field_group',
              4 => 'list',
              5 => 'oa_core',
              6 => 'og',
              7 => 'og_subgroups',
              8 => 'og_ui',
              9 => 'options',
              10 => 'strongarm',
            ),
            'stylesheets' => 
            array (
              'screen' => 
              array (
                0 => 'oa-subspaces.css',
              ),
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'field_group:field_group:1',
                1 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'oa_parent_space',
                1 => 'og_user_inheritance',
                2 => 'og_user_permission_inheritance',
              ),
              'field_group' => 
              array (
                0 => 'group_oa_space_inheritence|node|oa_space|form',
              ),
              'field_instance' => 
              array (
                0 => 'node-oa_group-oa_parent_space',
                1 => 'node-oa_group-og_user_inheritance',
                2 => 'node-oa_group-og_user_permission_inheritance',
                3 => 'node-oa_space-oa_parent_space',
                4 => 'node-oa_space-og_user_inheritance',
                5 => 'node-oa_space-og_user_permission_inheritance',
              ),
              'variable' => 
              array (
                0 => 'og_subgroups_default_fields_node',
              ),
            ),
            'files' => 
            array (
              0 => 'tests/oa_subspacesPermission.test',
              1 => 'tests/oa_subspacesSectionAccess.test',
            ),
            'project path' => 'profiles/openatrium/modules/features',
            'version' => '7.x-2.35',
            'datestamp' => '1445442258',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.35',
        ),
        'oa_htmlmail' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_htmlmail/oa_htmlmail.module',
          'basename' => 'oa_htmlmail.module',
          'name' => 'oa_htmlmail',
          'info' => 
          array (
            'name' => 'Open Atrium HTML Email',
            'description' => 'Provides HTML Email for messages',
            'package' => 'Open Atrium',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'htmlmail',
              1 => 'oa_messages',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'version' => '7.x-2.1',
            'project' => 'oa_htmlmail',
            'datestamp' => '1445354079',
            'php' => '5.2.4',
          ),
          'schema_version' => '7101',
          'version' => '7.x-2.1',
        ),
        'oa_analytics' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_analytics/oa_analytics.module',
          'basename' => 'oa_analytics.module',
          'name' => 'oa_analytics',
          'info' => 
          array (
            'name' => 'Open Atrium Analytics',
            'description' => 'Provides per space analytics reporting for Open Atrium',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'defaultconfig',
              1 => 'og',
              2 => 'googleanalytics',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'defaultconfig' => 
              array (
                0 => 'strongarm:googleanalytics_custom_var',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
            ),
            'features_exclude' => 
            array (
              'dependencies' => 
              array (
                'defaultconfig' => 'defaultconfig',
              ),
            ),
            'version' => '7.x-2.2',
            'project' => 'oa_analytics',
            'datestamp' => '1447950841',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.2',
        ),
        'oa_home' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_home/oa_home.module',
          'basename' => 'oa_home.module',
          'name' => 'oa_home',
          'info' => 
          array (
            'name' => 'Open Atrium Home',
            'description' => 'Default Home Page for Open Atrium',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'page_manager',
              2 => 'strongarm',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'page_manager_pages' => 
              array (
                0 => 'oa_homepage',
              ),
              'variable' => 
              array (
                0 => 'colorizer_cssbase',
                1 => 'colorizer_cssfile',
                2 => 'colorizer_incfile',
                3 => 'colorizer_previewfile',
                4 => 'site_frontpage',
              ),
            ),
            'version' => '7.x-2.2',
            'project' => 'oa_home',
            'datestamp' => '1445354077',
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'version' => '7.x-2.2',
        ),
        'oa_wiki' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_wiki/oa_wiki.module',
          'basename' => 'oa_wiki.module',
          'name' => 'oa_wiki',
          'info' => 
          array (
            'name' => 'Open Atrium Documents',
            'description' => 'Document pages for Open Atrium.  Can be used for wiki-like documents or as wrappers around external files.',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'project' => 'oa_wiki',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'dhtml_menu',
              2 => 'entityreference',
              3 => 'features',
              4 => 'field_group',
              5 => 'file',
              6 => 'list',
              7 => 'media',
              8 => 'oa_core',
              9 => 'og',
              10 => 'og_vocab',
              11 => 'options',
              12 => 'page_manager',
              13 => 'panelizer',
              14 => 'paragraphs',
              15 => 'select2widget',
              16 => 'strongarm',
              17 => 'text',
              18 => 'variable',
              19 => 'views',
              20 => 'views_content',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'oa_wiki.css',
              ),
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Built-in Apps',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'field_group:field_group:1',
                1 => 'page_manager:pages_default:1',
                2 => 'panelizer:panelizer:1',
                3 => 'strongarm:strongarm:1',
                4 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_oa_wiki_page_no_redirect',
              ),
              'field_group' => 
              array (
                0 => 'group_oa_access|node|oa_wiki_page|form',
              ),
              'field_instance' => 
              array (
                0 => 'node-oa_wiki_page-body',
                1 => 'node-oa_wiki_page-field_oa_media',
                2 => 'node-oa_wiki_page-field_oa_wiki_page_no_redirect',
                3 => 'node-oa_wiki_page-oa_other_spaces_ref',
                4 => 'node-oa_wiki_page-oa_section_ref',
                5 => 'node-oa_wiki_page-og_group_ref',
                6 => 'node-oa_wiki_page-og_vocabulary',
              ),
              'node' => 
              array (
                0 => 'oa_wiki_page',
              ),
              'page_manager_handlers' => 
              array (
                0 => 'node_edit_panel_context_6',
              ),
              'panelizer_defaults' => 
              array (
                0 => 'node:oa_wiki_page:default',
                1 => 'node:oa_wiki_page:default:featured',
              ),
              'variable' => 
              array (
                0 => 'dhtml_menu_settings',
                1 => 'field_bundle_settings_node__oa_wiki_page',
                2 => 'language_content_type_oa_wiki_page',
                3 => 'menu_options_oa_wiki_page',
                4 => 'menu_parent_oa_wiki_page',
                5 => 'node_options_oa_wiki_page',
                6 => 'node_preview_oa_wiki_page',
                7 => 'node_submitted_oa_wiki_page',
                8 => 'og_menu_enable_oa_wiki_page',
                9 => 'panelizer_defaults_node_oa_wiki_page',
                10 => 'panelizer_node:oa_wiki_page_default',
              ),
            ),
            'features_exclude' => 
            array (
              'variable' => 
              array (
                'comment_anonymous_oa_wiki_page' => 'comment_anonymous_oa_wiki_page',
                'comment_default_mode_oa_wiki_page' => 'comment_default_mode_oa_wiki_page',
                'comment_default_per_page_oa_wiki_page' => 'comment_default_per_page_oa_wiki_page',
                'comment_form_location_oa_wiki_page' => 'comment_form_location_oa_wiki_page',
                'comment_oa_wiki_page' => 'comment_oa_wiki_page',
                'comment_preview_oa_wiki_page' => 'comment_preview_oa_wiki_page',
                'comment_subject_field_oa_wiki_page' => 'comment_subject_field_oa_wiki_page',
              ),
            ),
            'version' => '7.x-2.36',
            'datestamp' => '1446649744',
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.36',
        ),
        'oa_wizard' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_wizard/oa_wizard.module',
          'basename' => 'oa_wizard.module',
          'name' => 'oa_wizard',
          'info' => 
          array (
            'name' => 'Open Atrium Wizard',
            'description' => 'Creates wizards for node add/edit forms',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'entity',
              2 => 'features',
              3 => 'list',
              4 => 'oa_core',
              5 => 'options',
              6 => 'text',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_wizard_steps',
                1 => 'field_wizard_type',
              ),
              'field_instance' => 
              array (
                0 => 'oa_wizard-wizard-field_wizard_steps',
                1 => 'oa_wizard-wizard-field_wizard_type',
              ),
              'oa_wizard' => 
              array (
                0 => 'section_wizard',
                1 => 'space_wizard',
              ),
            ),
            'files' => 
            array (
              0 => 'plugins/views/oa_wizard.views.inc',
              1 => 'plugins/views/oa_wizard.views_default.inc',
              2 => 'plugins/views/oa_wizard_handler_field_delete_entity.inc',
              3 => 'plugins/views/oa_wizard_handler_field_edit_entity.inc',
              4 => 'plugins/views/oa_wizard_handler_field_view_entity.inc',
            ),
            'version' => '7.x-2.2',
            'project' => 'oa_wizard',
            'datestamp' => '1445355549',
            'php' => '5.2.4',
          ),
          'schema_version' => '7101',
          'version' => '7.x-2.2',
        ),
        'oa_appearance' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_appearance/oa_appearance.module',
          'basename' => 'oa_appearance.module',
          'name' => 'oa_appearance',
          'info' => 
          array (
            'name' => 'Open Atrium Appearance',
            'description' => 'Change appearances of Spaces',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'colorizer',
              1 => 'ctools',
              2 => 'features',
              3 => 'field_group',
              4 => 'image',
              5 => 'list',
              6 => 'media',
              7 => 'oa_core',
              8 => 'options',
              9 => 'text',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'oa_appearance.css',
              ),
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'field_group:field_group:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_oa_banner',
                1 => 'field_oa_banner_position',
                2 => 'field_oa_banner_text',
              ),
              'field_group' => 
              array (
                0 => 'group_oa_banner|node|oa_space|form',
              ),
              'field_instance' => 
              array (
                0 => 'node-oa_space-field_oa_banner',
                1 => 'node-oa_space-field_oa_banner_position',
                2 => 'node-oa_space-field_oa_banner_text',
              ),
              'image' => 
              array (
                0 => 'oa_banner',
              ),
            ),
            'project path' => 'profiles/openatrium/modules/contrib/oa_core/modules',
            'version' => '7.x-2.5',
            'project' => 'oa_appearance',
            'datestamp' => '1445353157',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'oa_worktracker_duedate' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_worktracker/modules/oa_worktracker_duedate/oa_worktracker_duedate.module',
          'basename' => 'oa_worktracker_duedate.module',
          'name' => 'oa_worktracker_duedate',
          'info' => 
          array (
            'name' => 'Open Atrium Work Tracker - Due Date',
            'description' => 'Adds a Due Date field to Tasks.',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'date',
              1 => 'features',
              2 => 'oa_worktracker',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'oa_worktracker_duedate.css',
              ),
            ),
            'features' => 
            array (
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'features_override_items' => 
              array (
                0 => 'field_group.group_oa_worktracker_task_info|comment|comment_node_oa_worktracker_task|form',
                1 => 'field_group.group_oa_worktracker_task_info|node|oa_worktracker_task|default',
                2 => 'field_group.group_oa_worktracker_task_info|node|oa_worktracker_task|form',
                3 => 'panelizer_defaults.node:oa_section:oa_section_worktracker',
                4 => 'variable.field_bundle_settings_comment__comment_node_oa_worktracker_task',
                5 => 'variable.field_bundle_settings_node__oa_worktracker_task',
              ),
              'features_overrides' => 
              array (
                0 => 'field_group.group_oa_worktracker_task_info|comment|comment_node_oa_worktracker_task|form.data|children|5',
                1 => 'field_group.group_oa_worktracker_task_info|node|oa_worktracker_task|default.data|children|6',
                2 => 'field_group.group_oa_worktracker_task_info|node|oa_worktracker_task|form.data|children|6',
                3 => 'panelizer_defaults.node:oa_section:oa_section_worktracker.display|content|new-083432ea-5fb3-4e40-8c9d-09ed848deab7|configuration|fields_override|field_oa_worktracker_duedate',
                4 => 'variable.field_bundle_settings_comment__comment_node_oa_worktracker_task.value|extra_fields|form|field_oa_worktracker_duedate',
              ),
              'field_base' => 
              array (
                0 => 'field_oa_worktracker_duedate',
              ),
              'field_instance' => 
              array (
                0 => 'node-oa_worktracker_task-field_oa_worktracker_duedate',
              ),
            ),
            'version' => '7.x-2.4',
            'project' => 'oa_worktracker',
            'datestamp' => '1446650058',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.4',
        ),
        'oa_worktracker' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_worktracker/oa_worktracker.module',
          'basename' => 'oa_worktracker.module',
          'name' => 'oa_worktracker',
          'info' => 
          array (
            'name' => 'Open Atrium Work Tracker',
            'description' => 'Create Tasks in order to collaborate on work!',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'comment',
              1 => 'comment_alter',
              2 => 'ctools',
              3 => 'defaultconfig',
              4 => 'entityreference',
              5 => 'features',
              6 => 'field_group',
              7 => 'file',
              8 => 'media',
              9 => 'message',
              10 => 'node',
              11 => 'oa_clone',
              12 => 'oa_core',
              13 => 'oa_layouts',
              14 => 'oa_media',
              15 => 'oa_messages',
              16 => 'oa_panopoly_users',
              17 => 'oa_sections',
              18 => 'og',
              19 => 'og_ui',
              20 => 'options_element',
              21 => 'panelizer',
              22 => 'panopoly_users',
              23 => 'strongarm',
              24 => 'text',
              25 => 'variable',
              26 => 'views',
              27 => 'views_content',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'oa_worktracker.css',
              ),
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'dsnopek',
              'author_url' => 'https://www.drupal.org/u/dsnopek',
              'server' => 'openatrium',
              'package' => 'Built-in Apps',
            ),
            'configure' => 'admin/openatrium/worktracker',
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'field_group:field_group:1',
                1 => 'page_manager:pages_default:1',
                2 => 'panelizer:panelizer:1',
                3 => 'strongarm:strongarm:1',
                4 => 'views:views_default:3.0',
              ),
              'defaultconfig' => 
              array (
                0 => 'user_default_permissions:access comments',
                1 => 'user_default_permissions:edit own comments',
                2 => 'user_default_permissions:post comments',
                3 => 'user_default_permissions:skip comment approval',
                4 => 'user_default_permissions:view comment alterations in oa_worktracker_task',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_oa_worktracker_assigned_to',
                1 => 'field_oa_worktracker_priority',
                2 => 'field_oa_worktracker_task_status',
                3 => 'field_oa_worktracker_task_type',
              ),
              'field_group' => 
              array (
                0 => 'group_oa_access|node|oa_worktracker_task|form',
                1 => 'group_oa_worktracker_task_info|comment|comment_node_oa_worktracker_task|form',
                2 => 'group_oa_worktracker_task_info|node|oa_worktracker_task|default',
                3 => 'group_oa_worktracker_task_info|node|oa_worktracker_task|form',
              ),
              'field_instance' => 
              array (
                0 => 'comment-comment_node_oa_worktracker_task-comment_body',
                1 => 'message-oa_worktracker_task_update-field_oa_comment_ref',
                2 => 'message-oa_worktracker_task_update-field_oa_message_section',
                3 => 'message-oa_worktracker_task_update-field_oa_message_space',
                4 => 'message-oa_worktracker_task_update-field_oa_message_text',
                5 => 'message-oa_worktracker_task_update-field_oa_node_ref',
                6 => 'node-oa_worktracker_task-body',
                7 => 'node-oa_worktracker_task-field_oa_media',
                8 => 'node-oa_worktracker_task-field_oa_worktracker_assigned_to',
                9 => 'node-oa_worktracker_task-field_oa_worktracker_priority',
                10 => 'node-oa_worktracker_task-field_oa_worktracker_task_status',
                11 => 'node-oa_worktracker_task-field_oa_worktracker_task_type',
                12 => 'node-oa_worktracker_task-oa_section_ref',
                13 => 'node-oa_worktracker_task-og_group_ref',
              ),
              'message_type' => 
              array (
                0 => 'oa_worktracker_task_update',
              ),
              'node' => 
              array (
                0 => 'oa_worktracker_task',
              ),
              'page_manager_handlers' => 
              array (
                0 => 'node_edit_panel_context_task',
              ),
              'panelizer_defaults' => 
              array (
                0 => 'node:oa_section:oa_section_worktracker',
                1 => 'node:oa_worktracker_task:default',
                2 => 'node:oa_worktracker_task:default:featured',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_oa_worktracker_task',
                1 => 'comment_default_mode_oa_worktracker_task',
                2 => 'comment_default_per_page_oa_worktracker_task',
                3 => 'comment_form_location_oa_worktracker_task',
                4 => 'comment_oa_worktracker_task',
                5 => 'comment_preview_oa_worktracker_task',
                6 => 'comment_subject_field_oa_worktracker_task',
                7 => 'field_bundle_settings_comment__comment_node_oa_worktracker_task',
                8 => 'field_bundle_settings_message__oa_worktracker_task_update',
                9 => 'field_bundle_settings_node__oa_worktracker_task',
                10 => 'menu_options_oa_worktracker_task',
                11 => 'menu_parent_oa_worktracker_task',
                12 => 'node_options_oa_worktracker_task',
                13 => 'node_preview_oa_worktracker_task',
                14 => 'node_submitted_oa_worktracker_task',
                15 => 'panelizer_defaults_node_oa_worktracker_task',
              ),
              'views_view' => 
              array (
                0 => 'oa_worktracker',
              ),
            ),
            'features_exclude' => 
            array (
              'dependencies' => 
              array (
                'trash_flag' => 'trash_flag',
                'date' => 'date',
              ),
              'field_base' => 
              array (
                'field_oa_worktracker_duedate' => 'field_oa_worktracker_duedate',
                'comment_body' => 'comment_body',
              ),
              'field_instance' => 
              array (
                'node-oa_worktracker_task-field_oa_worktracker_duedate' => 'node-oa_worktracker_task-field_oa_worktracker_duedate',
              ),
              'variable' => 
              array (
                'panelizer_node:oa_section_allowed_layouts' => 'panelizer_node:oa_section_allowed_layouts',
              ),
            ),
            'version' => '7.x-2.4',
            'project' => 'oa_worktracker',
            'datestamp' => '1446650058',
            'php' => '5.2.4',
          ),
          'schema_version' => '7206',
          'version' => '7.x-2.4',
        ),
        'oa_events_import' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_events_import/oa_events_import.module',
          'basename' => 'oa_events_import.module',
          'name' => 'oa_events_import',
          'info' => 
          array (
            'name' => 'Open Atrium Event Imports',
            'description' => 'Provides iCal import functionality for Open Atrium events',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'date_ical',
              2 => 'entityreference',
              3 => 'features',
              4 => 'feeds',
              5 => 'field_group',
              6 => 'file',
              7 => 'oa_core',
              8 => 'oa_events',
              9 => 'og',
              10 => 'og_context',
              11 => 'options',
              12 => 'page_manager',
              13 => 'select2widget',
              14 => 'strongarm',
              15 => 'text',
              16 => 'views',
              17 => 'views_content',
              18 => 'views_load_more',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'feeds:feeds_importer_default:1',
                1 => 'field_group:field_group:1',
                2 => 'page_manager:pages_default:1',
                3 => 'strongarm:strongarm:1',
                4 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'feeds_importer' => 
              array (
                0 => 'ical_importer',
              ),
              'field_group' => 
              array (
                0 => 'group_oa_access|node|oa_ical_importer|form',
              ),
              'field_instance' => 
              array (
                0 => 'node-oa_ical_importer-body',
                1 => 'node-oa_ical_importer-field_basic_file_file',
                2 => 'node-oa_ical_importer-oa_section_ref',
                3 => 'node-oa_ical_importer-og_group_ref',
              ),
              'node' => 
              array (
                0 => 'oa_ical_importer',
              ),
              'page_manager_pages' => 
              array (
                0 => 'oa_ical_feeds',
              ),
              'variable' => 
              array (
                0 => 'additional_settings__active_tab_oa_ical_importer',
                1 => 'date_popup_authored_enabled_oa_ical_importer',
                2 => 'date_popup_authored_format_oa_ical_importer',
                3 => 'date_popup_authored_year_range_oa_ical_importer',
                4 => 'diff_enable_revisions_page_node_oa_ical_importer',
                5 => 'diff_show_preview_changes_node_oa_ical_importer',
                6 => 'diff_view_mode_preview_node_oa_ical_importer',
                7 => 'field_bundle_settings_node__oa_ical_importer',
                8 => 'menu_options_oa_ical_importer',
                9 => 'menu_parent_oa_ical_importer',
                10 => 'node_options_oa_ical_importer',
                11 => 'node_preview_oa_ical_importer',
                12 => 'node_submitted_oa_ical_importer',
                13 => 'og_menu_single_group__node__oa_ical_importer',
                14 => 'og_menu_single_group_content__node__oa_ical_importer',
                15 => 'panelizer_defaults_node_oa_ical_importer',
              ),
              'views_view' => 
              array (
                0 => 'open_atrium_ical_importers',
              ),
            ),
            'features_exclude' => 
            array (
              'dependencies' => 
              array (
                'panopoly_widgets' => 'panopoly_widgets',
              ),
              'variable' => 
              array (
                'comment_anonymous_oa_ical_importer' => 'comment_anonymous_oa_ical_importer',
                'comment_default_mode_oa_ical_importer' => 'comment_default_mode_oa_ical_importer',
                'comment_default_per_page_oa_ical_importer' => 'comment_default_per_page_oa_ical_importer',
                'comment_form_location_oa_ical_importer' => 'comment_form_location_oa_ical_importer',
                'comment_oa_ical_importer' => 'comment_oa_ical_importer',
                'comment_preview_oa_ical_importer' => 'comment_preview_oa_ical_importer',
                'comment_subject_field_oa_ical_importer' => 'comment_subject_field_oa_ical_importer',
              ),
            ),
            'version' => '7.x-2.27',
            'project' => 'oa_events_import',
            'datestamp' => '1445354064',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.27',
        ),
        'oa_search' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_search/oa_search.module',
          'basename' => 'oa_search.module',
          'name' => 'oa_search',
          'info' => 
          array (
            'name' => 'Open Atrium Search',
            'description' => 'Provides advanced search functionality for Open Atrium',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'facetapi',
              2 => 'oa_core',
              3 => 'page_manager',
              4 => 'panopoly_search',
              5 => 'search_api',
              6 => 'strongarm',
              7 => 'views',
              8 => 'views_content',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'facetapi:facetapi_defaults:1',
                1 => 'page_manager:pages_default:1',
                2 => 'strongarm:strongarm:1',
                3 => 'views:views_default:3.0',
              ),
              'facetapi' => 
              array (
                0 => 'search_api@database_node_index::created',
                1 => 'search_api@database_node_index::type',
                2 => 'search_api@database_node_index:block:oa_section_ref:title',
                3 => 'search_api@database_node_index:block:og_group_ref:title',
                4 => 'search_api@node_index::created',
                5 => 'search_api@node_index:block:oa_section_ref:title',
                6 => 'search_api@node_index:block:og_group_ref:title',
                7 => 'search_api@solr_user_index:block:og_user_node',
                8 => 'search_api@user_index:block:og_user_node',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'features_override_items' => 
              array (
                0 => 'search_api_server.database_server',
                1 => 'variable.search_active_modules',
              ),
              'features_overrides' => 
              array (
                0 => 'search_api_server.database_server.options|indexes|database_node_index|created|type',
                1 => 'search_api_server.database_server.options|indexes|database_node_index|field_oa_related',
                2 => 'search_api_server.database_server.options|indexes|database_node_index|field_oa_related:field_paragraph_text:value',
                3 => 'search_api_server.database_server.options|indexes|database_node_index|field_oa_related:snippet_body',
                4 => 'search_api_server.database_server.options|indexes|database_node_index|oa_section_ref:title',
                5 => 'search_api_server.database_server.options|indexes|database_node_index|og_group_ref:title',
                6 => 'search_api_server.database_server.options|indexes|user_index',
                7 => 'variable.search_active_modules.value|file_entity',
                8 => 'variable.search_active_modules.value|user',
              ),
              'page_manager_handlers' => 
              array (
                0 => 'search_node_panel_context',
                1 => 'search_node_panel_context_2',
                2 => 'search_user_panel_context',
                3 => 'search_user_panel_context_2',
              ),
              'search_api_index' => 
              array (
                0 => 'solr_user_index',
                1 => 'user_index',
              ),
              'variable' => 
              array (
                0 => 'facetapi:block_cache:search_api@solr_user_index',
                1 => 'facetapi:block_cache:search_api@user_index',
              ),
              'views_view' => 
              array (
                0 => 'oa_user_search',
                1 => 'oa_user_solr_search',
              ),
            ),
            'features_exclude' => 
            array (
              'dependencies' => 
              array (
                'entity' => 'entity',
              ),
            ),
            'files' => 
            array (
              0 => 'oa_search.facetapi.inc',
            ),
            'version' => '7.x-2.6',
            'project' => 'oa_search',
            'datestamp' => '1445354970',
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.6',
        ),
        'oa_tour' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_tour/oa_tour.module',
          'basename' => 'oa_tour.module',
          'name' => 'oa_tour',
          'info' => 
          array (
            'name' => 'Open Atrium Tour',
            'description' => 'Open Atrium customizations for the Bootstrap Tour module',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'bootstrap_tour',
              1 => 'ctools',
              2 => 'entityreference',
              3 => 'features',
              4 => 'select2widget',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_bootstrap_tour_spaces',
              ),
              'field_instance' => 
              array (
                0 => 'bootstrap_tour-bootstrap_tour-field_bootstrap_tour_spaces',
              ),
            ),
            'version' => '7.x-2.4',
            'project' => 'oa_tour',
            'datestamp' => '1445355545',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.4',
        ),
        'oa_sitemap' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_sitemap/oa_sitemap.module',
          'basename' => 'oa_sitemap.module',
          'name' => 'oa_sitemap',
          'info' => 
          array (
            'name' => 'Open Atrium Site Map',
            'description' => 'A site map tool for OA2',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'oa_angular',
              2 => 'oa_core',
              3 => 'oa_wizard',
              4 => 'page_manager',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'page_manager_pages' => 
              array (
                0 => 'oa_sitemap',
                1 => 'sitemap_old',
                2 => 'space_sitemap',
              ),
            ),
            'version' => '7.x-2.9',
            'project' => 'oa_sitemap',
            'datestamp' => '1445354986',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'oa_devel' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_devel/oa_devel.module',
          'basename' => 'oa_devel.module',
          'name' => 'oa_devel',
          'info' => 
          array (
            'core' => '7.x',
            'name' => 'Open Atrium Devel',
            'description' => 'Provides useful tools for developers working with Open Atrium',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'coder',
              1 => 'coder_review',
              2 => 'devel',
              3 => 'installprofiletest',
              4 => 'simpletest_clone',
              5 => 'field_ui',
              6 => 'views_ui',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'version' => '7.x-2.0',
            'project' => 'oa_devel',
            'datestamp' => '1424717584',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0',
        ),
        'oa_media' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_media/oa_media.module',
          'basename' => 'oa_media.module',
          'name' => 'oa_media',
          'info' => 
          array (
            'name' => 'Open Atrium Media',
            'description' => 'Media improvements for Open Atrium such as Colorbox',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'project' => 'oa_media',
            'dependencies' => 
            array (
              0 => 'colorbox',
              1 => 'ctools',
              2 => 'features',
              3 => 'file_entity',
              4 => 'media',
              5 => 'media_bulk_upload',
              6 => 'media_colorbox',
              7 => 'media_vimeo',
              8 => 'media_youtube',
              9 => 'multiform',
              10 => 'panelizer',
              11 => 'plupload',
              12 => 'strongarm',
              13 => 'text',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'oa_media.css',
              ),
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'file_entity:file_default_displays:1',
                1 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'features_override_items' => 
              array (
                0 => 'views_view.media_default',
              ),
              'features_overrides' => 
              array (
                0 => 'views_view.media_default.display|default|display_options|fields|filename|link_to_file',
                1 => 'views_view.media_default.display|default|display_options|filters|oa_section_ref_target_id',
                2 => 'views_view.media_default.display|default|display_options|filters|og_group_ref_target_id',
                3 => 'views_view.media_default.display|default|display_options|relationships',
                4 => 'views_view.media_default.display|media_browser_my_files|display_options|filters|oa_section_ref_target_id',
                5 => 'views_view.media_default.display|media_browser_my_files|display_options|filters|og_group_ref_target_id',
                6 => 'views_view.media_default.display|media_browser_my_files|display_options|relationships|reverse_field_oa_media_node',
              ),
              'field_base' => 
              array (
                0 => 'field_file_image_alt_text',
                1 => 'field_file_image_title_text',
                2 => 'field_file_title',
              ),
              'field_instance' => 
              array (
                0 => 'file-document-field_file_title',
                1 => 'file-image-field_file_image_alt_text',
                2 => 'file-image-field_file_image_title_text',
              ),
              'file_display' => 
              array (
                0 => 'document__colorbox__file_field_file_default',
                1 => 'document__colorbox__file_field_file_download_link',
                2 => 'document__colorbox__file_field_file_rendered',
                3 => 'document__colorbox__file_field_file_table',
                4 => 'document__colorbox__file_field_file_url_plain',
                5 => 'document__colorbox__file_field_media_colorbox',
                6 => 'document__colorbox__file_field_media_large_icon',
                7 => 'document__colorbox__file_field_oa_media_formatter',
                8 => 'document__colorbox__file_image',
                9 => 'document__default__file_field_file_default',
                10 => 'document__default__file_field_file_download_link',
                11 => 'document__default__file_field_file_rendered',
                12 => 'document__default__file_field_file_table',
                13 => 'document__default__file_field_file_url_plain',
                14 => 'document__default__file_field_media_colorbox',
                15 => 'document__default__file_field_media_large_icon',
                16 => 'document__default__file_field_oa_media_formatter',
                17 => 'document__default__file_image',
                18 => 'document__link__file_field_file_default',
                19 => 'document__link__file_field_file_download_link',
                20 => 'document__link__file_field_file_rendered',
                21 => 'document__link__file_field_file_table',
                22 => 'document__link__file_field_file_url_plain',
                23 => 'document__link__file_field_media_colorbox',
                24 => 'document__link__file_field_media_large_icon',
                25 => 'document__link__file_field_oa_media_formatter',
                26 => 'document__link__file_image',
                27 => 'document__preview__file_field_file_default',
                28 => 'document__preview__file_field_file_download_link',
                29 => 'document__preview__file_field_file_rendered',
                30 => 'document__preview__file_field_file_table',
                31 => 'document__preview__file_field_file_url_plain',
                32 => 'document__preview__file_field_media_colorbox',
                33 => 'document__preview__file_field_media_large_icon',
                34 => 'document__preview__file_field_oa_media_formatter',
                35 => 'document__preview__file_image',
                36 => 'document__teaser__file_field_file_default',
                37 => 'document__teaser__file_field_file_download_link',
                38 => 'document__teaser__file_field_file_rendered',
                39 => 'document__teaser__file_field_file_table',
                40 => 'document__teaser__file_field_file_url_plain',
                41 => 'document__teaser__file_field_media_colorbox',
                42 => 'document__teaser__file_field_media_large_icon',
                43 => 'document__teaser__file_field_oa_media_formatter',
                44 => 'document__teaser__file_image',
                45 => 'image__colorbox__file_field_colorbox',
                46 => 'image__colorbox__file_field_colorbox_link',
                47 => 'image__colorbox__file_field_file_default',
                48 => 'image__colorbox__file_field_file_rendered',
                49 => 'image__colorbox__file_field_file_table',
                50 => 'image__colorbox__file_field_file_url_plain',
                51 => 'image__colorbox__file_field_image',
                52 => 'image__colorbox__file_field_media_colorbox',
                53 => 'image__colorbox__file_field_media_large_icon',
                54 => 'image__colorbox__file_image',
                55 => 'image__default__file_field_colorbox',
                56 => 'image__default__file_field_colorbox_link',
                57 => 'image__default__file_field_image',
                58 => 'image__default__file_field_media_colorbox',
                59 => 'image__preview__file_field_colorbox',
                60 => 'image__preview__file_field_colorbox_link',
                61 => 'image__preview__file_field_image',
                62 => 'image__preview__file_field_media_colorbox',
                63 => 'video__colorbox__file_field_file_default',
                64 => 'video__colorbox__file_field_file_download_link',
                65 => 'video__colorbox__file_field_file_rendered',
                66 => 'video__colorbox__file_field_file_table',
                67 => 'video__colorbox__file_field_file_url_plain',
                68 => 'video__colorbox__file_field_media_colorbox',
                69 => 'video__colorbox__file_field_media_large_icon',
                70 => 'video__colorbox__file_field_oa_media_formatter',
                71 => 'video__colorbox__file_image',
                72 => 'video__colorbox__media_vimeo_image',
                73 => 'video__colorbox__media_vimeo_video',
                74 => 'video__colorbox__media_youtube_image',
                75 => 'video__colorbox__media_youtube_video',
                76 => 'video__default__file_field_file_default',
                77 => 'video__default__file_field_file_download_link',
                78 => 'video__default__file_field_file_rendered',
                79 => 'video__default__file_field_file_table',
                80 => 'video__default__file_field_file_url_plain',
                81 => 'video__default__file_field_media_colorbox',
                82 => 'video__default__file_field_media_large_icon',
                83 => 'video__default__file_field_oa_media_formatter',
                84 => 'video__default__file_image',
                85 => 'video__preview__file_field_file_default',
                86 => 'video__preview__file_field_file_download_link',
                87 => 'video__preview__file_field_file_rendered',
                88 => 'video__preview__file_field_file_table',
                89 => 'video__preview__file_field_file_url_plain',
                90 => 'video__preview__file_field_media_colorbox',
                91 => 'video__preview__file_field_oa_media_formatter',
                92 => 'video__preview__file_image',
                93 => 'video__preview__media_vimeo_image',
                94 => 'video__preview__media_vimeo_video',
                95 => 'video__preview__media_youtube_video',
                96 => 'video__teaser__file_field_file_default',
                97 => 'video__teaser__file_field_file_download_link',
                98 => 'video__teaser__file_field_file_rendered',
                99 => 'video__teaser__file_field_file_table',
                100 => 'video__teaser__file_field_file_url_plain',
                101 => 'video__teaser__file_field_media_colorbox',
                102 => 'video__teaser__file_field_media_large_icon',
                103 => 'video__teaser__file_field_oa_media_formatter',
                104 => 'video__teaser__file_image',
              ),
              'variable' => 
              array (
                0 => 'colorbox_caption_trim',
                1 => 'colorbox_caption_trim_length',
                2 => 'colorbox_compression_type',
                3 => 'colorbox_custom_settings_activate',
                4 => 'colorbox_fixed',
                5 => 'colorbox_initialheight',
                6 => 'colorbox_initialwidth',
                7 => 'colorbox_inline',
                8 => 'colorbox_load',
                9 => 'colorbox_maxheight',
                10 => 'colorbox_maxwidth',
                11 => 'colorbox_opacity',
                12 => 'colorbox_overlayclose',
                13 => 'colorbox_pages',
                14 => 'colorbox_scrolling',
                15 => 'colorbox_slideshow',
                16 => 'colorbox_slideshowauto',
                17 => 'colorbox_slideshowspeed',
                18 => 'colorbox_text_close',
                19 => 'colorbox_text_current',
                20 => 'colorbox_text_next',
                21 => 'colorbox_text_previous',
                22 => 'colorbox_text_start',
                23 => 'colorbox_text_stop',
                24 => 'colorbox_transition_speed',
                25 => 'colorbox_transition_type',
                26 => 'colorbox_visibility',
                27 => 'field_bundle_settings_file__document',
              ),
            ),
            'mtime' => '1416507754',
            'version' => '7.x-2.32',
            'datestamp' => '1445358845',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-2.32',
        ),
        'oa_tour_defaults' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_tour_defaults/oa_tour_defaults.module',
          'basename' => 'oa_tour_defaults.module',
          'name' => 'oa_tour_defaults',
          'info' => 
          array (
            'name' => 'Open Atrium Tour Defaults',
            'description' => 'Provides the default set of popup tours',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'bootstrap_tour',
              1 => 'ctools',
              2 => 'oa_tour',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'bootstrap_tour' => 
              array (
                0 => 'banners',
                1 => 'colorizing_a_space',
                2 => 'configuring_layout',
                3 => 'content_visibility',
                4 => 'groups',
                5 => 'menus',
                6 => 'notifications',
                7 => 'sandbox_mode',
                8 => 'section_visibility',
                9 => 'sections_overview',
                10 => 'setting_your_home',
                11 => 'site_tours',
                12 => 'spaces',
                13 => 'subspaces',
                14 => 'teams',
                15 => 'toolbar',
                16 => 'user_creation',
                17 => 'welcome_to_oa2_',
              ),
              'ctools' => 
              array (
                0 => 'bootstrap_tour:bootstrap_tour_tour:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
            ),
            'version' => '7.x-2.3',
            'project' => 'oa_tour_defaults',
            'datestamp' => '1445355547',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3',
        ),
        'oa_events' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_events/oa_events.module',
          'basename' => 'oa_events.module',
          'name' => 'oa_events',
          'info' => 
          array (
            'name' => 'Open Atrium Events',
            'description' => 'Event Calendar for Open Atrium',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'colors',
              1 => 'ctools',
              2 => 'date',
              3 => 'date_all_day',
              4 => 'date_ical',
              5 => 'date_repeat_field',
              6 => 'date_views',
              7 => 'entity',
              8 => 'entityreference',
              9 => 'features',
              10 => 'field_group',
              11 => 'file',
              12 => 'fullcalendar',
              13 => 'fullcalendar_colors',
              14 => 'fullcalendar_create',
              15 => 'fullcalendar_legend',
              16 => 'fullcalendar_options',
              17 => 'geocoder',
              18 => 'geofield',
              19 => 'geofield_map',
              20 => 'link',
              21 => 'media',
              22 => 'message',
              23 => 'oa_core',
              24 => 'oa_layouts',
              25 => 'oa_sections',
              26 => 'og',
              27 => 'og_ui',
              28 => 'options',
              29 => 'page_manager',
              30 => 'panelizer',
              31 => 'paragraphs',
              32 => 'select2widget',
              33 => 'strongarm',
              34 => 'text',
              35 => 'views',
              36 => 'views_content',
              37 => 'views_load_more',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'oa-events.css',
              ),
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Built-in Apps',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'field_group:field_group:1',
                1 => 'page_manager:pages_default:1',
                2 => 'panelizer:panelizer:1',
                3 => 'strongarm:strongarm:1',
                4 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_oa_address',
                1 => 'field_oa_date',
                2 => 'field_oa_geo_location',
              ),
              'field_group' => 
              array (
                0 => 'group_oa_access|node|oa_event|form',
                1 => 'group_oa_event_location|node|oa_event|form',
              ),
              'field_instance' => 
              array (
                0 => 'node-oa_event-body',
                1 => 'node-oa_event-field_oa_address',
                2 => 'node-oa_event-field_oa_date',
                3 => 'node-oa_event-field_oa_geo_location',
                4 => 'node-oa_event-field_oa_media',
                5 => 'node-oa_event-oa_other_spaces_ref',
                6 => 'node-oa_event-oa_section_ref',
                7 => 'node-oa_event-og_group_ref',
                8 => 'node-oa_event-og_vocabulary',
              ),
              'message_type' => 
              array (
                0 => 'oa_event_notification',
              ),
              'node' => 
              array (
                0 => 'oa_event',
              ),
              'page_manager_handlers' => 
              array (
                0 => 'node_edit_panel_context_7',
              ),
              'panelizer_defaults' => 
              array (
                0 => 'node:oa_event:default',
                1 => 'node:oa_event:default:featured',
                2 => 'node:oa_section:calendar_section',
              ),
              'variable' => 
              array (
                0 => 'field_bundle_settings_message__oa_event_notification',
                1 => 'field_bundle_settings_node__oa_event',
                2 => 'menu_options_oa_event',
                3 => 'menu_parent_oa_event',
                4 => 'node_options_oa_event',
                5 => 'node_preview_oa_event',
                6 => 'node_submitted_oa_event',
                7 => 'panelizer_defaults_node_oa_event',
                8 => 'panelizer_node:oa_event_allowed_layouts_default',
                9 => 'panelizer_node:oa_event_allowed_types_default',
                10 => 'panelizer_node:oa_event_default',
              ),
              'views_view' => 
              array (
                0 => 'oa_event_detail',
                1 => 'oa_event_list',
                2 => 'oa_fullcalendar',
                3 => 'open_atrium_event_location',
              ),
            ),
            'features_exclude' => 
            array (
              'dependencies' => 
              array (
                'oa_events' => 'oa_events',
                'og_vocab' => 'og_vocab',
              ),
              'variable' => 
              array (
                'panelizer_node:oa_event_allowed_layouts' => 'panelizer_node:oa_event_allowed_layouts',
                'panelizer_node:oa_section_allowed_layouts' => 'panelizer_node:oa_section_allowed_layouts',
                'comment_anonymous_oa_event' => 'comment_anonymous_oa_event',
                'comment_default_mode_oa_event' => 'comment_default_mode_oa_event',
                'comment_default_per_page_oa_event' => 'comment_default_per_page_oa_event',
                'comment_form_location_oa_event' => 'comment_form_location_oa_event',
                'comment_oa_event' => 'comment_oa_event',
                'comment_preview_oa_event' => 'comment_preview_oa_event',
                'comment_subject_field_oa_event' => 'comment_subject_field_oa_event',
              ),
            ),
            'version' => '7.x-2.39',
            'project' => 'oa_events',
            'datestamp' => '1447091891',
            'php' => '5.2.4',
          ),
          'schema_version' => '7004',
          'version' => '7.x-2.39',
        ),
        'oa_archive' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_archive/oa_archive.module',
          'basename' => 'oa_archive.module',
          'name' => 'oa_archive',
          'info' => 
          array (
            'name' => 'Open Atrium Archive',
            'description' => 'Add archive options for spaces and content in Open Atrium.',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'features_override',
              2 => 'oa_core',
              3 => 'trash_flag',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'features_override_items' => 
              array (
                0 => 'flag.trash',
                1 => 'views_view.trash_flag_bin',
              ),
              'features_overrides' => 
              array (
                0 => 'flag.trash.flag_confirmation',
                1 => 'flag.trash.flag_long',
                2 => 'flag.trash.flag_message',
                3 => 'flag.trash.flag_short',
                4 => 'flag.trash.show_on_page',
                5 => 'flag.trash.title',
                6 => 'flag.trash.unflag_confirmation',
                7 => 'flag.trash.unflag_denied_text',
                8 => 'flag.trash.unflag_long',
                9 => 'flag.trash.unflag_message',
                10 => 'flag.trash.unflag_short',
                11 => 'views_view.trash_flag_bin.display|default|display_options|empty|area_text_custom|content',
                12 => 'views_view.trash_flag_bin.display|default|display_options|title',
                13 => 'views_view.trash_flag_bin.display|page_1|display_options|defaults|empty',
                14 => 'views_view.trash_flag_bin.display|page_1|display_options|empty|area_text_custom|content',
                15 => 'views_view.trash_flag_bin.display|page_1|display_options|menu|title',
                16 => 'views_view.trash_flag_bin.display|page_1|display_options|path',
                17 => 'views_view.trash_flag_bin.display|page|display_options|empty|area_text_custom|content',
                18 => 'views_view.trash_flag_bin.display|page|display_options|path',
              ),
            ),
            'project path' => 'profiles/openatrium/modules/contrib',
            'version' => '7.x-2.3',
            'project' => 'oa_archive',
            'datestamp' => '1446650348',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3',
        ),
        'oa_mailhandler' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_mailhandler/oa_mailhandler.module',
          'basename' => 'oa_mailhandler.module',
          'name' => 'oa_mailhandler',
          'info' => 
          array (
            'name' => 'Open Atrium Mailhandler',
            'description' => 'Handle message replies in Open Atrium',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'project' => 'oa_mailhandler',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'entity',
              2 => 'features',
              3 => 'feeds',
              4 => 'feeds_comment_processor',
              5 => 'mailcomment',
              6 => 'mailhandler',
              7 => 'mailhandler_php_imap',
              8 => 'strongarm',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'feeds:feeds_importer_default:1',
                1 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'feeds_importer' => 
              array (
                0 => 'comment_reply_email_importer',
              ),
              'variable' => 
              array (
                0 => 'mailcomment_import_filter_mode',
                1 => 'mailcomment_insert_reply_text',
              ),
            ),
            'project path' => 'profiles/openatrium/modules/features',
            'version' => '7.x-2.24',
            'datestamp' => '1447951163',
            'php' => '5.2.4',
          ),
          'schema_version' => '7002',
          'version' => '7.x-2.24',
        ),
        'oa_clone' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_clone/oa_clone.module',
          'basename' => 'oa_clone.module',
          'name' => 'oa_clone',
          'info' => 
          array (
            'name' => 'Open Atrium Clone',
            'description' => 'Allows cloning of spaces, sections, and content in Open Atrium.',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'clone',
              1 => 'conditional_fields',
              2 => 'entityreference',
              3 => 'features',
              4 => 'list',
              5 => 'oa_buttons',
              6 => 'strongarm',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'conditional_fields' => 
              array (
                0 => 'taxonomy_term:space_type',
              ),
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_oa_clone_enabled',
                1 => 'field_oa_clone_space',
              ),
              'field_instance' => 
              array (
                0 => 'taxonomy_term-space_type-field_oa_clone_enabled',
                1 => 'taxonomy_term-space_type-field_oa_clone_space',
              ),
              'variable' => 
              array (
                0 => 'clone_use_node_type_name',
              ),
            ),
            'version' => '7.x-2.9',
            'project' => 'oa_clone',
            'datestamp' => '1447951153',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'oa_toolbar' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_toolbar/oa_toolbar.module',
          'basename' => 'oa_toolbar.module',
          'name' => 'oa_toolbar',
          'info' => 
          array (
            'name' => 'Open Atrium Toolbar',
            'description' => 'Generates toolbar widgets for the header region',
            'package' => 'Open Atrium',
            'core' => '7.x',
            'php' => '5.1',
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/oa_toolbar.css',
              ),
            ),
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'og_session_context',
            ),
            'version' => '7.x-2.7',
            'project' => 'oa_toolbar',
            'datestamp' => '1446841750',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.7',
        ),
        'oa_favorites' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_favorites/oa_favorites.module',
          'basename' => 'oa_favorites.module',
          'name' => 'oa_favorites',
          'info' => 
          array (
            'name' => 'Open Atrium Favorites',
            'description' => 'Favorite Space',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'flag',
              2 => 'oa_core',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'flag' => 
              array (
                0 => 'favorite_space',
              ),
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'oa_favorites.css',
              ),
            ),
            'project path' => 'sites/all/modules/contrib/oa_core/modules',
            'version' => '7.x-2.2',
            'project' => 'oa_favorites',
            'datestamp' => '1445354070',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.2',
        ),
        'oa_files' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_files/oa_files.module',
          'basename' => 'oa_files.module',
          'name' => 'oa_files',
          'info' => 
          array (
            'name' => 'Open Atrium Files',
            'description' => 'Allows OA Documents to be viewed in a Files Section',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'project' => 'oa_files',
            'dependencies' => 
            array (
              0 => 'command_buttons',
              1 => 'ctools',
              2 => 'oa_angular',
              3 => 'oa_core',
              4 => 'oa_layouts',
              5 => 'oa_sections',
              6 => 'oa_wiki',
              7 => 'panelizer',
              8 => 'strongarm',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'command_button' => 
              array (
                0 => 'add_file',
              ),
              'ctools' => 
              array (
                0 => 'panelizer:panelizer:1',
                1 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'panelizer_defaults' => 
              array (
                0 => 'node:oa_section:oa_section_files',
              ),
            ),
            'features_exclude' => 
            array (
              'variable' => 
              array (
                'panelizer_node:oa_section_allowed_layouts' => 'panelizer_node:oa_section_allowed_layouts',
              ),
            ),
            'version' => '7.x-2.15',
            'datestamp' => '1447951160',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-2.15',
        ),
        'oa_domains' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_domains/oa_domains.module',
          'basename' => 'oa_domains.module',
          'name' => 'oa_domains',
          'info' => 
          array (
            'name' => 'Open Atrium Domains',
            'description' => 'Allows each space to have different URL hostnames.',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'oa_core',
              2 => 'text',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_oa_space_domain',
              ),
              'field_instance' => 
              array (
                0 => 'node-oa_space-field_oa_space_domain',
              ),
            ),
            'project path' => 'profiles/openatrium/modules',
            'version' => '7.x-2.2',
            'project' => 'oa_domains',
            'datestamp' => '1445354062',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.2',
        ),
        'oa_sandbox' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_sandbox/oa_sandbox.module',
          'basename' => 'oa_sandbox.module',
          'name' => 'oa_sandbox',
          'info' => 
          array (
            'name' => 'Open Atrium Sandbox',
            'package' => 'Open Atrium',
            'core' => '7.x',
            'description' => 'Adds a Sandbox mode to Open Atrium which makes any content additions/edits to not be saved.',
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'version' => '7.x-2.1',
            'project' => 'oa_sandbox',
            'datestamp' => '1445354955',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.1',
        ),
        'oa_comment' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_comment/oa_comment.module',
          'basename' => 'oa_comment.module',
          'name' => 'oa_comment',
          'info' => 
          array (
            'name' => 'Open Atrium Comments',
            'description' => 'Configure core comments',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'comment',
              1 => 'ctools',
              2 => 'fasttoggle_comment',
              3 => 'oa_core',
              4 => 'strongarm',
              5 => 'views',
              6 => 'views_content',
              7 => 'views_load_more',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
                1 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'variable' => 
              array (
                0 => 'fasttoggle_comment_status_settings',
                1 => 'fasttoggle_comments_rw_only',
                2 => 'fasttoggle_label_style',
              ),
              'views_view' => 
              array (
                0 => 'oa_comment_media',
                1 => 'oa_comment_topics',
              ),
            ),
            'files' => 
            array (
              0 => 'views/views_handler_field_oa_comment_timestamp_new_comments.inc',
              1 => 'views/views_handler_field_oa_comment_timestamp_updated_comments.inc',
              2 => 'views/views_handler_field_oa_comment_last_date.inc',
              3 => 'views/views_handler_argument_oa_comment_paragraph_and_current_ids.inc',
              4 => 'views/views_handler_sort_oa_comment_last_date.inc',
            ),
            'version' => '7.x-2.7',
            'project' => 'oa_comment',
            'datestamp' => '1445353450',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.7',
        ),
        'oa_styles' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_styles/oa_styles.module',
          'basename' => 'oa_styles.module',
          'name' => 'oa_styles',
          'info' => 
          array (
            'name' => 'Open Atrium Styles',
            'description' => 'Various styles for Open Atrium\'s Panel/Bootstrap theme',
            'package' => 'Open Atrium',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'version' => '7.x-2.1',
            'project' => 'oa_styles',
            'datestamp' => '1445355246',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.1',
        ),
        'oa_contextual_tabs' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_contextual_tabs/oa_contextual_tabs.module',
          'basename' => 'oa_contextual_tabs.module',
          'name' => 'oa_contextual_tabs',
          'info' => 
          array (
            'name' => 'Open Atrium Contextual Tabs',
            'description' => 'Moves drupal page "tabs" into buttons and drop-down menu in the upper-right of the page.',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'project' => 'oa_contextual_tabs',
            'dependencies' => 
            array (
              0 => 'contextual_tabs',
              1 => 'ctools',
              2 => 'strongarm',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'variable' => 
              array (
                0 => 'contextual_tabs_extract',
                1 => 'contextual_tabs_pages',
                2 => 'contextual_tabs_visilibity',
              ),
            ),
            'project path' => 'sites/all/modules/contrib/oa_core/modules',
            'version' => '7.x-2.29',
            'datestamp' => '1445353454',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.29',
        ),
        'oa_admin' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/apps/oa_admin/oa_admin.module',
          'basename' => 'oa_admin.module',
          'name' => 'oa_admin',
          'info' => 
          array (
            'name' => 'Open Atrium Admin',
            'description' => 'Adds space and section filters to Admin content view',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'oa_core',
              1 => 'oa_sections',
              2 => 'views',
            ),
            'apps' => 
            array (
              'screenshots' => 
              array (
                0 => 'app/screenshot.png',
              ),
              'logo' => 'app/logo.png',
              'author' => 'Phase2 Technology',
              'author_url' => 'http://www.phase2technology.com/',
              'server' => 'openatrium',
              'package' => 'Core addons',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'views_view' => 
              array (
                0 => 'oa_admin_views_node',
              ),
            ),
            'features_exclude' => 
            array (
              'dependencies' => 
              array (
                'ctools' => 'ctools',
              ),
            ),
            'project path' => 'sites/all/modules/contrib/oa_core/modules',
            'version' => '7.x-2.2',
            'project' => 'oa_admin',
            'datestamp' => '1445352851',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.2',
        ),
        'multiform' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/multiform/multiform.module',
          'basename' => 'multiform.module',
          'name' => 'multiform',
          'info' => 
          array (
            'name' => 'Multiple forms',
            'description' => 'Allows displaying and submitting multiple forms in one form',
            'files' => 
            array (
              0 => 'multiform.module',
              1 => 'tests/multiform.test',
            ),
            'core' => '7.x',
            'version' => '7.x-1.1',
            'project' => 'multiform',
            'datestamp' => '1402457628',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.1',
        ),
        'search_api_views' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/search_api/contrib/search_api_views/search_api_views.module',
          'basename' => 'search_api_views.module',
          'name' => 'search_api_views',
          'info' => 
          array (
            'name' => 'Search views',
            'description' => 'Integrates the Search API with Views, enabling users to create views with searches as filters or arguments.',
            'dependencies' => 
            array (
              0 => 'search_api',
              1 => 'views',
            ),
            'core' => '7.x',
            'package' => 'Search',
            'files' => 
            array (
              0 => 'includes/display_facet_block.inc',
              1 => 'includes/handler_argument.inc',
              2 => 'includes/handler_argument_fulltext.inc',
              3 => 'includes/handler_argument_more_like_this.inc',
              4 => 'includes/handler_argument_string.inc',
              5 => 'includes/handler_argument_date.inc',
              6 => 'includes/handler_argument_taxonomy_term.inc',
              7 => 'includes/handler_filter.inc',
              8 => 'includes/handler_filter_boolean.inc',
              9 => 'includes/handler_filter_date.inc',
              10 => 'includes/handler_filter_entity.inc',
              11 => 'includes/handler_filter_fulltext.inc',
              12 => 'includes/handler_filter_language.inc',
              13 => 'includes/handler_filter_options.inc',
              14 => 'includes/handler_filter_taxonomy_term.inc',
              15 => 'includes/handler_filter_text.inc',
              16 => 'includes/handler_filter_user.inc',
              17 => 'includes/handler_sort.inc',
              18 => 'includes/plugin_cache.inc',
              19 => 'includes/query.inc',
            ),
            'version' => '7.x-1.15',
            'project' => 'search_api',
            'datestamp' => '1433352300',
            'php' => '5.2.4',
          ),
          'schema_version' => '7102',
          'version' => '7.x-1.15',
        ),
        'search_api_facetapi' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/search_api/contrib/search_api_facetapi/search_api_facetapi.module',
          'basename' => 'search_api_facetapi.module',
          'name' => 'search_api_facetapi',
          'info' => 
          array (
            'name' => 'Search facets',
            'description' => 'Integrate the Search API with the Facet API to provide facetted searches.',
            'dependencies' => 
            array (
              0 => 'search_api',
              1 => 'facetapi',
            ),
            'core' => '7.x',
            'package' => 'Search',
            'files' => 
            array (
              0 => 'plugins/facetapi/adapter.inc',
              1 => 'plugins/facetapi/query_type_term.inc',
              2 => 'plugins/facetapi/query_type_date.inc',
            ),
            'version' => '7.x-1.15',
            'project' => 'search_api',
            'datestamp' => '1433352300',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.15',
        ),
        'search_api' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/search_api/search_api.module',
          'basename' => 'search_api.module',
          'name' => 'search_api',
          'info' => 
          array (
            'name' => 'Search API',
            'description' => 'Provides a generic API for modules offering search capabilites.',
            'dependencies' => 
            array (
              0 => 'entity',
            ),
            'core' => '7.x',
            'package' => 'Search',
            'files' => 
            array (
              0 => 'search_api.test',
              1 => 'includes/callback.inc',
              2 => 'includes/callback_add_aggregation.inc',
              3 => 'includes/callback_add_hierarchy.inc',
              4 => 'includes/callback_add_url.inc',
              5 => 'includes/callback_add_viewed_entity.inc',
              6 => 'includes/callback_bundle_filter.inc',
              7 => 'includes/callback_comment_access.inc',
              8 => 'includes/callback_language_control.inc',
              9 => 'includes/callback_node_access.inc',
              10 => 'includes/callback_node_status.inc',
              11 => 'includes/callback_role_filter.inc',
              12 => 'includes/datasource.inc',
              13 => 'includes/datasource_entity.inc',
              14 => 'includes/datasource_external.inc',
              15 => 'includes/exception.inc',
              16 => 'includes/index_entity.inc',
              17 => 'includes/processor.inc',
              18 => 'includes/processor_highlight.inc',
              19 => 'includes/processor_html_filter.inc',
              20 => 'includes/processor_ignore_case.inc',
              21 => 'includes/processor_stopwords.inc',
              22 => 'includes/processor_tokenizer.inc',
              23 => 'includes/processor_transliteration.inc',
              24 => 'includes/query.inc',
              25 => 'includes/server_entity.inc',
              26 => 'includes/service.inc',
            ),
            'configure' => 'admin/config/search/search_api',
            'version' => '7.x-1.15',
            'project' => 'search_api',
            'datestamp' => '1433352300',
            'php' => '5.2.4',
          ),
          'schema_version' => '7117',
          'version' => '7.x-1.15',
        ),
        'strongarm' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/strongarm/strongarm.module',
          'basename' => 'strongarm.module',
          'name' => 'strongarm',
          'info' => 
          array (
            'name' => 'Strongarm',
            'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'strongarm.admin.inc',
              1 => 'strongarm.install',
              2 => 'strongarm.module',
            ),
            'version' => '7.x-2.0',
            'project' => 'strongarm',
            'datestamp' => '1339604214',
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.0',
        ),
        'feeds_news' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/feeds/feeds_news/feeds_news.module',
          'basename' => 'feeds_news.module',
          'name' => 'feeds_news',
          'info' => 
          array (
            'name' => 'Feeds News',
            'description' => 'A news aggregator built with feeds, creates nodes from imported feed items. With OPML import.',
            'core' => '7.x',
            'package' => 'Feeds',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'features',
              2 => 'feeds',
              3 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'feeds:feeds_importer_default:1',
                1 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'feeds_importer' => 
              array (
                0 => 'feed',
                1 => 'opml',
              ),
              'field_base' => 
              array (
                0 => 'field_feed_item_description',
              ),
              'field_instance' => 
              array (
                0 => 'node-feed_item-field_feed_item_description',
              ),
              'node' => 
              array (
                0 => 'feed',
                1 => 'feed_item',
              ),
              'views_view' => 
              array (
                0 => 'feeds_defaults_feed_items',
              ),
            ),
            'files' => 
            array (
              0 => 'feeds_news.module',
              1 => 'feeds_news.test',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'feeds',
            'datestamp' => '1436615941',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0-beta1',
        ),
        'feeds_import' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/feeds/feeds_import/feeds_import.module',
          'basename' => 'feeds_import.module',
          'name' => 'feeds_import',
          'info' => 
          array (
            'name' => 'Feeds Import',
            'description' => 'An example of a node importer and a user importer.',
            'core' => '7.x',
            'package' => 'Feeds',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'feeds',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'feeds:feeds_importer_default:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'feeds_importer' => 
              array (
                0 => 'node',
                1 => 'user',
              ),
            ),
            'files' => 
            array (
              0 => 'feeds_import.test',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'feeds',
            'datestamp' => '1436615941',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0-beta1',
        ),
        'feeds_ui' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/feeds/feeds_ui/feeds_ui.module',
          'basename' => 'feeds_ui.module',
          'name' => 'feeds_ui',
          'info' => 
          array (
            'name' => 'Feeds Admin UI',
            'description' => 'Administrative UI for Feeds module.',
            'package' => 'Feeds',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'feeds',
            ),
            'configure' => 'admin/structure/feeds',
            'files' => 
            array (
              0 => 'feeds_ui.test',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'feeds',
            'datestamp' => '1436615941',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-2.0-beta1',
        ),
        'feeds' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/feeds/feeds.module',
          'basename' => 'feeds.module',
          'name' => 'feeds',
          'info' => 
          array (
            'name' => 'Feeds',
            'description' => 'Aggregates RSS/Atom/RDF feeds, imports CSV files and more.',
            'package' => 'Feeds',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'job_scheduler',
            ),
            'files' => 
            array (
              0 => 'includes/FeedsConfigurable.inc',
              1 => 'includes/FeedsImporter.inc',
              2 => 'includes/FeedsSource.inc',
              3 => 'libraries/ParserCSV.inc',
              4 => 'libraries/http_request.inc',
              5 => 'libraries/PuSHSubscriber.inc',
              6 => 'plugins/FeedsCSVParser.inc',
              7 => 'plugins/FeedsFetcher.inc',
              8 => 'plugins/FeedsFileFetcher.inc',
              9 => 'plugins/FeedsHTTPFetcher.inc',
              10 => 'plugins/FeedsNodeProcessor.inc',
              11 => 'plugins/FeedsOPMLParser.inc',
              12 => 'plugins/FeedsParser.inc',
              13 => 'plugins/FeedsPlugin.inc',
              14 => 'plugins/FeedsProcessor.inc',
              15 => 'plugins/FeedsSimplePieParser.inc',
              16 => 'plugins/FeedsSitemapParser.inc',
              17 => 'plugins/FeedsSyndicationParser.inc',
              18 => 'plugins/FeedsTermProcessor.inc',
              19 => 'plugins/FeedsUserProcessor.inc',
              20 => 'tests/feeds.test',
              21 => 'tests/common_syndication_parser.test',
              22 => 'tests/feeds_date_time.test',
              23 => 'tests/feeds_mapper_date.test',
              24 => 'tests/feeds_mapper_date_multiple.test',
              25 => 'tests/feeds_mapper_field.test',
              26 => 'tests/feeds_mapper_file.test',
              27 => 'tests/feeds_mapper_hooks.test',
              28 => 'tests/feeds_mapper_link.test',
              29 => 'tests/feeds_mapper_path.test',
              30 => 'tests/feeds_mapper_profile.test',
              31 => 'tests/feeds_mapper_unique.test',
              32 => 'tests/feeds_mapper.test',
              33 => 'tests/feeds_mapper_config.test',
              34 => 'tests/feeds_fetcher_file.test',
              35 => 'tests/feeds_mapper_format_config.test',
              36 => 'tests/feeds_fetcher_http.test',
              37 => 'tests/feeds_parser_sitemap.test',
              38 => 'tests/feeds_parser_syndication.test',
              39 => 'tests/feeds_processor_node.test',
              40 => 'tests/feeds_processor_term.test',
              41 => 'tests/feeds_processor_user.test',
              42 => 'tests/feeds_push.test',
              43 => 'tests/feeds_scheduler.test',
              44 => 'tests/feeds_mapper_link.test',
              45 => 'tests/feeds_mapper_summary.test',
              46 => 'tests/feeds_mapper_taxonomy.test',
              47 => 'tests/http_request.test',
              48 => 'tests/parser_csv.test',
              49 => 'views/feeds_views_handler_argument_importer_id.inc',
              50 => 'views/feeds_views_handler_field_importer_name.inc',
              51 => 'views/feeds_views_handler_field_log_message.inc',
              52 => 'views/feeds_views_handler_field_severity.inc',
              53 => 'views/feeds_views_handler_field_source.inc',
              54 => 'views/feeds_views_handler_filter_severity.inc',
              55 => 'views/feeds_views_plugin_argument_validate_feed_nid.inc',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'feeds',
            'datestamp' => '1436615941',
            'php' => '5.2.4',
          ),
          'schema_version' => '7212',
          'version' => '7.x-2.0-beta1',
        ),
        'views_load_more' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/views_load_more/views_load_more.module',
          'basename' => 'views_load_more.module',
          'name' => 'views_load_more',
          'info' => 
          array (
            'name' => 'Views Load More',
            'description' => 'A pager plugin for views. Gives users the option to add a \'more\' button to a view and have the results appended to existing results being displayed.',
            'core' => '7.x',
            'package' => 'Views',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'files' => 
            array (
              0 => 'views_load_more.views.inc',
              1 => 'views_plugin_pager_load_more.inc',
            ),
            'version' => '7.x-1.5',
            'project' => 'views_load_more',
            'datestamp' => '1412631229',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.5',
        ),
        'date_repeat' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/date/date_repeat/date_repeat.module',
          'basename' => 'date_repeat.module',
          'name' => 'date_repeat',
          'info' => 
          array (
            'name' => 'Date Repeat API',
            'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
            'dependencies' => 
            array (
              0 => 'date_api',
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'php' => '5.2',
            'files' => 
            array (
              0 => 'tests/date_repeat.test',
              1 => 'tests/date_repeat_form.test',
            ),
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'date_all_day' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/date/date_all_day/date_all_day.module',
          'basename' => 'date_all_day.module',
          'name' => 'date_all_day',
          'info' => 
          array (
            'name' => 'Date All Day',
            'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
            'dependencies' => 
            array (
              0 => 'date_api',
              1 => 'date',
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'date_popup' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/date/date_popup/date_popup.module',
          'basename' => 'date_popup.module',
          'name' => 'date_popup',
          'info' => 
          array (
            'name' => 'Date Popup',
            'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
            'dependencies' => 
            array (
              0 => 'date_api',
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'configure' => 'admin/config/date/date_popup',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'themes/datepicker.1.7.css',
              ),
            ),
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'date_tools' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/date/date_tools/date_tools.module',
          'basename' => 'date_tools.module',
          'name' => 'date_tools',
          'info' => 
          array (
            'name' => 'Date Tools',
            'description' => 'Tools to import and auto-create dates and calendars.',
            'dependencies' => 
            array (
              0 => 'date',
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'configure' => 'admin/config/date/tools',
            'files' => 
            array (
              0 => 'tests/date_tools.test',
            ),
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'date_views' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/date/date_views/date_views.module',
          'basename' => 'date_views.module',
          'name' => 'date_views',
          'info' => 
          array (
            'name' => 'Date Views',
            'description' => 'Views integration for date fields and date functionality.',
            'package' => 'Date/Time',
            'dependencies' => 
            array (
              0 => 'date_api',
              1 => 'views',
            ),
            'core' => '7.x',
            'php' => '5.2',
            'files' => 
            array (
              0 => 'includes/date_views_argument_handler.inc',
              1 => 'includes/date_views_argument_handler_simple.inc',
              2 => 'includes/date_views_filter_handler.inc',
              3 => 'includes/date_views_filter_handler_simple.inc',
              4 => 'includes/date_views.views.inc',
              5 => 'includes/date_views_plugin_pager.inc',
            ),
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
          ),
          'schema_version' => '7200',
          'version' => '7.x-2.9',
        ),
        'date_api' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/date/date_api/date_api.module',
          'basename' => 'date_api.module',
          'name' => 'date_api',
          'info' => 
          array (
            'name' => 'Date API',
            'description' => 'A Date API that can be used by other modules.',
            'package' => 'Date/Time',
            'core' => '7.x',
            'php' => '5.2',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'date.css',
              ),
            ),
            'files' => 
            array (
              0 => 'date_api.module',
              1 => 'date_api_sql.inc',
            ),
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
            'dependencies' => 
            array (
            ),
          ),
          'schema_version' => '7001',
          'version' => '7.x-2.9',
        ),
        'date_migrate_example' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/date/date_migrate/date_migrate_example/date_migrate_example.module',
          'basename' => 'date_migrate_example.module',
          'name' => 'date_migrate_example',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'date',
              1 => 'date_repeat',
              2 => 'date_repeat_field',
              3 => 'features',
              4 => 'migrate',
            ),
            'description' => 'Examples of migrating with the Date module',
            'features' => 
            array (
              'field' => 
              array (
                0 => 'node-date_migrate_example-body',
                1 => 'node-date_migrate_example-field_date',
                2 => 'node-date_migrate_example-field_date_range',
                3 => 'node-date_migrate_example-field_date_repeat',
                4 => 'node-date_migrate_example-field_datestamp',
                5 => 'node-date_migrate_example-field_datestamp_range',
                6 => 'node-date_migrate_example-field_datetime',
                7 => 'node-date_migrate_example-field_datetime_range',
              ),
              'node' => 
              array (
                0 => 'date_migrate_example',
              ),
            ),
            'files' => 
            array (
              0 => 'date_migrate_example.migrate.inc',
            ),
            'name' => 'Date Migration Example',
            'package' => 'Features',
            'project' => 'date',
            'version' => '7.x-2.9',
            'datestamp' => '1441727353',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'date_repeat_field' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/date/date_repeat_field/date_repeat_field.module',
          'basename' => 'date_repeat_field.module',
          'name' => 'date_repeat_field',
          'info' => 
          array (
            'name' => 'Date Repeat Field',
            'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
            'dependencies' => 
            array (
              0 => 'date_api',
              1 => 'date',
              2 => 'date_repeat',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'date_repeat_field.css',
              ),
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'date_context' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/date/date_context/date_context.module',
          'basename' => 'date_context.module',
          'name' => 'date_context',
          'info' => 
          array (
            'name' => 'Date Context',
            'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
            'package' => 'Date/Time',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'date',
              1 => 'context',
            ),
            'files' => 
            array (
              0 => 'date_context.module',
              1 => 'plugins/date_context_date_condition.inc',
            ),
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'date' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/date/date.module',
          'basename' => 'date.module',
          'name' => 'date',
          'info' => 
          array (
            'name' => 'Date',
            'description' => 'Makes date/time fields available.',
            'dependencies' => 
            array (
              0 => 'date_api',
            ),
            'package' => 'Date/Time',
            'core' => '7.x',
            'php' => '5.2',
            'files' => 
            array (
              0 => 'date.migrate.inc',
              1 => 'tests/date_api.test',
              2 => 'tests/date.test',
              3 => 'tests/date_field.test',
              4 => 'tests/date_migrate.test',
              5 => 'tests/date_validation.test',
              6 => 'tests/date_timezone.test',
              7 => 'tests/date_views_pager.test',
              8 => 'tests/date_views_popup.test',
            ),
            'version' => '7.x-2.9',
            'project' => 'date',
            'datestamp' => '1441727353',
          ),
          'schema_version' => '7004',
          'version' => '7.x-2.9',
        ),
        'colorbox' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/colorbox/colorbox.module',
          'basename' => 'colorbox.module',
          'name' => 'colorbox',
          'info' => 
          array (
            'name' => 'Colorbox',
            'description' => 'A light-weight, customizable lightbox plugin for jQuery 1.4.3+.',
            'dependencies' => 
            array (
              0 => 'libraries (>=2.x)',
            ),
            'core' => '7.x',
            'configure' => 'admin/config/media/colorbox',
            'files' => 
            array (
              0 => 'views/colorbox_handler_field_colorbox.inc',
            ),
            'version' => '7.x-2.10',
            'project' => 'colorbox',
            'datestamp' => '1443691449',
            'php' => '5.2.4',
          ),
          'schema_version' => '7202',
          'version' => '7.x-2.10',
        ),
        'og_register' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/og/og_register/og_register.module',
          'basename' => 'og_register.module',
          'name' => 'og_register',
          'info' => 
          array (
            'name' => 'Organic groups register',
            'description' => 'Allow subscribing to groups during the user registration.',
            'package' => 'Organic groups',
            'dependencies' => 
            array (
              0 => 'og',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'og_register.module',
              1 => 'og_register.install',
            ),
            'version' => '7.x-2.7',
            'project' => 'og',
            'datestamp' => '1399486728',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.7',
        ),
        'og_example' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/og/og_example/og_example.module',
          'basename' => 'og_example.module',
          'name' => 'og_example',
          'info' => 
          array (
            'name' => 'OG example',
            'description' => 'Example module to show Organic groups configuration that can be used as building block.',
            'core' => '7.x',
            'package' => 'Features',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'entityreference_prepopulate',
              2 => 'features',
              3 => 'list',
              4 => 'message_notify',
              5 => 'og',
              6 => 'og_ui',
              7 => 'page_manager',
              8 => 'panels',
              9 => 'rules',
              10 => 'views_content',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'body',
                1 => 'field_node_reference',
                2 => 'group_group',
                3 => 'og_group_ref',
              ),
              'field_instance' => 
              array (
                0 => 'message-og_new_content-field_node_reference',
                1 => 'node-group-body',
                2 => 'node-group-group_group',
                3 => 'node-post-body',
                4 => 'node-post-og_group_ref',
              ),
              'message_type' => 
              array (
                0 => 'og_new_content',
              ),
              'node' => 
              array (
                0 => 'group',
                1 => 'post',
              ),
              'page_manager_handlers' => 
              array (
                0 => 'node_view_panel_context',
              ),
              'rules_config' => 
              array (
                0 => 'rules_og_new_content_message',
              ),
            ),
            'version' => '7.x-2.7',
            'project' => 'og',
            'datestamp' => '1399486728',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.7',
        ),
        'og_access' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/og/og_access/og_access.module',
          'basename' => 'og_access.module',
          'name' => 'og_access',
          'info' => 
          array (
            'name' => 'Organic groups access control',
            'description' => 'Enable access control for private and public groups and group content.',
            'package' => 'Organic groups',
            'dependencies' => 
            array (
              0 => 'og',
            ),
            'core' => '7.x',
            'version' => '7.x-2.7',
            'files' => 
            array (
              0 => 'og_access.module',
              1 => 'og_access.install',
              2 => 'og_access.test',
            ),
            'project' => 'og',
            'datestamp' => '1399486728',
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'version' => '7.x-2.7',
        ),
        'og_ui' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/og/og_ui/og_ui.module',
          'basename' => 'og_ui.module',
          'name' => 'og_ui',
          'info' => 
          array (
            'name' => 'Organic groups UI',
            'description' => 'Organic groups UI.',
            'package' => 'Organic groups',
            'dependencies' => 
            array (
              0 => 'og',
              1 => 'views_bulk_operations',
            ),
            'core' => '7.x',
            'version' => '7.x-2.7',
            'files' => 
            array (
              0 => 'og_ui.test',
              1 => 'includes/views/handlers/og_ui_handler_area_og_membership_overview.inc',
              2 => 'includes/migrate/7000/add_field.inc',
              3 => 'includes/migrate/7000/populate_field.inc',
              4 => 'includes/migrate/7000/set_roles.inc',
            ),
            'configure' => 'admin/config/group',
            'project' => 'og',
            'datestamp' => '1399486728',
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'version' => '7.x-2.7',
        ),
        'og_field_access' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/og/og_field_access/og_field_access.module',
          'basename' => 'og_field_access.module',
          'name' => 'og_field_access',
          'info' => 
          array (
            'name' => 'Organic groups field access',
            'description' => 'Provide field access based on group.',
            'package' => 'Organic groups',
            'dependencies' => 
            array (
              0 => 'og',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'og_field_access.module',
              1 => 'og_field_access.test',
            ),
            'version' => '7.x-2.7',
            'project' => 'og',
            'datestamp' => '1399486728',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.7',
        ),
        'og_context' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/og/og_context/og_context.module',
          'basename' => 'og_context.module',
          'name' => 'og_context',
          'info' => 
          array (
            'name' => 'Organic groups context',
            'description' => 'Get a group from a viewed page.',
            'package' => 'Organic groups',
            'dependencies' => 
            array (
              0 => 'og',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'og_context.module',
              1 => 'og_context.install',
              2 => 'includes/views/handlers/og_context_plugin_argument_default_group_context.inc',
              3 => 'includes/views/handlers/og_context_plugin_access_og_perm.inc',
            ),
            'version' => '7.x-2.7',
            'project' => 'og',
            'datestamp' => '1399486728',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.7',
        ),
        'og' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/og/og.module',
          'basename' => 'og.module',
          'name' => 'og',
          'info' => 
          array (
            'name' => 'Organic groups',
            'description' => 'API to allow associating content with groups.',
            'package' => 'Organic groups',
            'dependencies' => 
            array (
              0 => 'options',
              1 => 'list',
              2 => 'text',
              3 => 'entity',
              4 => 'entityreference',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'og.info.inc',
              1 => 'includes/og.admin.inc',
              2 => 'includes/og.exception.inc',
              3 => 'includes/og.membership.inc',
              4 => 'includes/og.membership_type.inc',
              5 => 'includes/views/og.views.inc',
              6 => 'og.test',
              7 => 'includes/views/handlers/og_plugin_argument_validate_group.inc',
              8 => 'includes/views/handlers/og_plugin_argument_default_user_groups.inc',
              9 => 'includes/views/handlers/og_handler_field_group_member_count.inc',
              10 => 'includes/views/handlers/og_handler_field_group_audience_state.inc',
              11 => 'includes/views/handlers/og_handler_field_prerender_list.inc',
              12 => 'includes/views/handlers/og_handler_field_user_roles.inc',
              13 => 'includes/views/handlers/og_handler_field_group_permissions.inc',
              14 => 'includes/views/handlers/og_handler_field_og_membership_link_edit.inc',
              15 => 'includes/views/handlers/og_handler_field_og_membership_link_delete.inc',
              16 => 'includes/views/handlers/og_handler_filter_group_audience_state.inc',
              17 => 'includes/views/handlers/og_handler_filter_user_roles.inc',
              18 => 'includes/views/handlers/og_handler_relationship.inc',
              19 => 'includes/migrate/plugins/destinations/og_membership.inc',
              20 => 'includes/migrate/7000/og_add_fields.inc',
              21 => 'includes/migrate/7000/og_content.inc',
              22 => 'includes/migrate/7000/og_group.inc',
              23 => 'includes/migrate/7000/og_user.inc',
              24 => 'includes/migrate/7000/og_ogur_roles.migrate.inc',
              25 => 'includes/migrate/7000/og_ogur.migrate.inc',
              26 => 'includes/migrate/og.migrate.inc',
              27 => 'includes/migrate/7200/og_og_membership.migrate.inc',
              28 => 'includes/migrate/7200/og_roles.migrate.inc',
              29 => 'includes/migrate/7200/og_user_roles.migrate.inc',
            ),
            'version' => '7.x-2.7',
            'project' => 'og',
            'datestamp' => '1399486728',
            'php' => '5.2.4',
          ),
          'schema_version' => '7205',
          'version' => '7.x-2.7',
        ),
        'paragraphs_i18n' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/paragraphs/modules/paragraphs_i18n/paragraphs_i18n.module',
          'basename' => 'paragraphs_i18n.module',
          'name' => 'paragraphs_i18n',
          'info' => 
          array (
            'name' => 'Paragraphs - Internationalization',
            'description' => 'Allow paragraph bundles to be duplicate for translation.',
            'core' => '7.x',
            'package' => 'Paragraphs',
            'dependencies' => 
            array (
              0 => 'paragraphs',
              1 => 'replicate',
              2 => 'replicate_paragraphs',
            ),
            'version' => '7.x-1.0-rc4',
            'project' => 'paragraphs',
            'datestamp' => '1444523876',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-rc4',
        ),
        'paragraphs_bundle_permissions' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/paragraphs/modules/paragraphs_bundle_permissions/paragraphs_bundle_permissions.module',
          'basename' => 'paragraphs_bundle_permissions.module',
          'name' => 'paragraphs_bundle_permissions',
          'info' => 
          array (
            'name' => 'Paragraphs Bundle Permissions',
            'description' => 'Add view / create / update / delete permissions for all paragraph bundles.',
            'core' => '7.x',
            'package' => 'Paragraphs',
            'dependencies' => 
            array (
              0 => 'paragraphs',
            ),
            'version' => '7.x-1.0-rc4',
            'project' => 'paragraphs',
            'datestamp' => '1444523876',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-rc4',
        ),
        'paragraphs' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/paragraphs/paragraphs.module',
          'basename' => 'paragraphs.module',
          'name' => 'paragraphs',
          'info' => 
          array (
            'name' => 'Paragraphs',
            'description' => 'Paragraphs module to control your content flow.',
            'core' => '7.x',
            'package' => 'Paragraphs',
            'dependencies' => 
            array (
              0 => 'entity',
            ),
            'test_dependencies' => 
            array (
              0 => 'ctools',
              1 => 'entity',
              2 => 'features',
              3 => 'panelizer',
              4 => 'strongarm',
            ),
            'files' => 
            array (
              0 => 'ParagraphsItemEntity.inc',
              1 => 'ParagraphsItemMetadataController.inc',
              2 => 'migrate/destinations/MigrateDestinationParagraphsItem.inc',
              3 => 'migrate/fields/ParagraphsMigrateParagraphsFieldHandler.inc',
              4 => 'views/paragraphs_handler_relationship.inc',
              5 => 'tests/paragraphs.test',
            ),
            'version' => '7.x-1.0-rc4',
            'project' => 'paragraphs',
            'datestamp' => '1444523876',
            'php' => '5.2.4',
          ),
          'schema_version' => '7101',
          'version' => '7.x-1.0-rc4',
        ),
        'oa_angular' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_angular/oa_angular.module',
          'basename' => 'oa_angular.module',
          'name' => 'oa_angular',
          'info' => 
          array (
            'name' => 'Open Atrium Angular',
            'description' => 'Provides helper functions for using AngularJS in Open Atrium',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'oa_core',
            ),
            'project path' => 'sites/all/modules/contrib/oa_core/modules',
            'version' => '7.x-2.0',
            'project' => 'oa_angular',
            'datestamp' => '1429300688',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0',
        ),
        'message_digest' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/message_digest/message_digest.module',
          'basename' => 'message_digest.module',
          'name' => 'message_digest',
          'info' => 
          array (
            'name' => 'Message Digest',
            'description' => 'Daily or weekly digest emails for the Message module',
            'core' => '7.x',
            'package' => 'Message',
            'dependencies' => 
            array (
              0 => 'message_notify',
            ),
            'files' => 
            array (
              0 => 'plugins/notifier/abstract.inc',
            ),
            'version' => '7.x-1.0',
            'project' => 'message_digest',
            'datestamp' => '1393364610',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0',
        ),
        'respondjs' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/respondjs/respondjs.module',
          'basename' => 'respondjs.module',
          'name' => 'respondjs',
          'info' => 
          array (
            'name' => 'Respond.js',
            'description' => 'Respond.js integration for Drupal',
            'core' => '7.x',
            'package' => 'Responsive',
            'files' => 
            array (
              0 => 'respondjs.module',
              1 => 'respondjs.admin.inc',
            ),
            'configure' => 'admin/config/media/respondjs',
            'version' => '7.x-1.5',
            'project' => 'respondjs',
            'datestamp' => '1426164182',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.5',
        ),
        'og_vocab' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/og_vocab/og_vocab.module',
          'basename' => 'og_vocab.module',
          'name' => 'og_vocab',
          'info' => 
          array (
            'name' => 'Organic groups vocabularies',
            'description' => 'Enable groups to maintain their own vocabularies.',
            'dependencies' => 
            array (
              0 => 'og',
              1 => 'taxonomy',
            ),
            'package' => 'Organic groups',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/og_vocab.og_vocab.inc',
              1 => 'includes/og_vocab.exception.inc',
              2 => 'og_vocab.test',
              3 => 'includes/migrate/og_vocab.migrate.inc',
            ),
            'version' => '7.x-1.2',
            'project' => 'og_vocab',
            'datestamp' => '1383228663',
            'php' => '5.2.4',
          ),
          'schema_version' => '7104',
          'version' => '7.x-1.2',
        ),
        'image_resize_filter' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/image_resize_filter/image_resize_filter.module',
          'basename' => 'image_resize_filter.module',
          'name' => 'image_resize_filter',
          'info' => 
          array (
            'name' => 'Image resize filter',
            'description' => 'Filter to automatically scale images to their height and width dimensions.',
            'core' => '7.x',
            'configure' => 'admin/config/content/formats',
            'version' => '7.x-1.15',
            'project' => 'image_resize_filter',
            'datestamp' => '1434921781',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-1.15',
        ),
        'tablefield' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/tablefield/tablefield.module',
          'basename' => 'tablefield.module',
          'name' => 'tablefield',
          'info' => 
          array (
            'name' => 'TableField',
            'description' => 'Defines a generic tablular data field.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'tablefield.css',
              1 => 'tablefield.module',
              2 => 'tablefield.install',
            ),
            'version' => '7.x-2.4',
            'project' => 'tablefield',
            'datestamp' => '1429600085',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7002',
          'version' => '7.x-2.4',
        ),
        'og_session_context' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/og_session_context/og_session_context.module',
          'basename' => 'og_session_context.module',
          'name' => 'og_session_context',
          'info' => 
          array (
            'name' => 'Session Context',
            'description' => 'Provides og_context value from session variable.',
            'package' => 'Open Atrium',
            'core' => '7.x',
            'php' => '5.1',
            'dependencies' => 
            array (
              0 => 'og',
              1 => 'og_context',
            ),
            'version' => '7.x-1.0-beta4',
            'project' => 'og_session_context',
            'datestamp' => '1444161840',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta4',
        ),
        'og_variables' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/og_variables/og_variables.module',
          'basename' => 'og_variables.module',
          'name' => 'og_variables',
          'info' => 
          array (
            'name' => 'OG Variables',
            'description' => 'Allows for per group variables',
            'package' => 'Organic Groups',
            'core' => '7.x',
            'php' => '5.1',
            'dependencies' => 
            array (
              0 => 'variable_store (7.x-2.x)',
              1 => 'variable_realm (7.x-2.x)',
              2 => 'og_ui',
              3 => 'og_context',
              4 => 'entity',
            ),
            'files' => 
            array (
              0 => 'og_variables.class.inc',
            ),
            'version' => '7.x-1.0',
            'project' => 'og_variables',
            'datestamp' => '1436385540',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0',
        ),
        'example' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/coder/coder_upgrade/tests/new/samples/example.module',
          'basename' => 'example.module',
          'name' => 'example',
          'info' => 
          array (
            'dependencies' => 
            array (
            ),
            'description' => '',
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => NULL,
        ),
        'coder_upgrade' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/coder/coder_upgrade/coder_upgrade.module',
          'basename' => 'coder_upgrade.module',
          'name' => 'coder_upgrade',
          'info' => 
          array (
            'name' => 'Coder Upgrade',
            'description' => 'Modifies source code to assist with the upgrade of a module for changes to a relied upon API.',
            'package' => 'Development',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'gplib (<2.0)',
            ),
            'files' => 
            array (
              0 => 'coder_upgrade.test',
            ),
            'configure' => 'admin/config/development/coder/upgrade/settings',
            'version' => '7.x-2.0-beta2',
            'project' => 'coder',
            'datestamp' => '1359576476',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0-beta2',
        ),
        'coder_review' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/coder/coder_review/coder_review.module',
          'basename' => 'coder_review.module',
          'name' => 'coder_review',
          'info' => 
          array (
            'name' => 'Coder Review',
            'description' => '"Developer module" which reviews your code identifying coding style problems and where updates to the API are required.',
            'package' => 'Development',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'coder',
            ),
            'files' => 
            array (
              0 => 'tests/coder_review_test_case.tinc',
              1 => 'tests/coder_review_6x.test',
              2 => 'tests/coder_review_7x.test',
              3 => 'tests/coder_review_comment.test',
              4 => 'tests/coder_review_i18n.test',
              5 => 'tests/coder_review_security.test',
              6 => 'tests/coder_review_sql.test',
              7 => 'tests/coder_review_style.test',
              8 => 'tests/coder_review_sniffer.test',
            ),
            'version' => '7.x-2.0-beta2',
            'project' => 'coder',
            'datestamp' => '1359576476',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0-beta2',
        ),
        'coder' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/coder/coder.module',
          'basename' => 'coder.module',
          'name' => 'coder',
          'info' => 
          array (
            'name' => 'Coder',
            'description' => 'Developer Module that assists with code review and version upgrade',
            'package' => 'Development',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'coder.module',
            ),
            'version' => '7.x-2.0-beta2',
            'project' => 'coder',
            'datestamp' => '1359576476',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0-beta2',
        ),
        'admin_views' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/admin_views/admin_views.module',
          'basename' => 'admin_views.module',
          'name' => 'admin_views',
          'info' => 
          array (
            'name' => 'Administration views',
            'description' => 'Replaces all system object management pages in Drupal core with real views.',
            'package' => 'Administration',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'views',
              1 => 'views_bulk_operations (>=7.x-3.2)',
            ),
            'files' => 
            array (
              0 => 'plugins/views_plugin_display_system.inc',
              1 => 'plugins/views_plugin_access_menu.inc',
              2 => 'tests/admin_views.test',
            ),
            'version' => '7.x-1.5',
            'project' => 'admin_views',
            'datestamp' => '1436376676',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.5',
        ),
        'fullcalendar_options' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/fullcalendar/fullcalendar_options/fullcalendar_options.module',
          'basename' => 'fullcalendar_options.module',
          'name' => 'fullcalendar_options',
          'info' => 
          array (
            'name' => 'FullCalendar Options',
            'description' => 'FullCalendar configuration extenders.',
            'core' => '7.x',
            'package' => 'FullCalendar',
            'configure' => 'admin/config/user-interface/fullcalendar/options',
            'dependencies' => 
            array (
              0 => 'fullcalendar',
            ),
            'version' => '7.x-2.0+5-dev',
            'project' => 'fullcalendar',
            'datestamp' => '1447964458',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0+5-dev',
        ),
        'fullcalendar_legend' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/fullcalendar/fullcalendar_legend/fullcalendar_legend.module',
          'basename' => 'fullcalendar_legend.module',
          'name' => 'fullcalendar_legend',
          'info' => 
          array (
            'name' => 'FullCalendar Legend',
            'description' => 'Show the bundle names of content types on a FullCalendar. Intended for use with FullCalendar Colors.',
            'core' => '7.x',
            'package' => 'FullCalendar',
            'dependencies' => 
            array (
              0 => 'fullcalendar',
              1 => 'block',
            ),
            'version' => '7.x-2.0+5-dev',
            'project' => 'fullcalendar',
            'datestamp' => '1447964458',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0+5-dev',
        ),
        'fullcalendar_colors' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/fullcalendar/fullcalendar_colors/fullcalendar_colors.module',
          'basename' => 'fullcalendar_colors.module',
          'name' => 'fullcalendar_colors',
          'info' => 
          array (
            'name' => 'FullCalendar Colors',
            'description' => 'Allows definition of colors for FullCalendar events based on taxonomies, node types, etc.',
            'core' => '7.x',
            'package' => 'FullCalendar',
            'dependencies' => 
            array (
              0 => 'colors',
              1 => 'fullcalendar',
            ),
            'version' => '7.x-2.0+5-dev',
            'project' => 'fullcalendar',
            'datestamp' => '1447964458',
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.0+5-dev',
        ),
        'fullcalendar' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/fullcalendar/fullcalendar.module',
          'basename' => 'fullcalendar.module',
          'name' => 'fullcalendar',
          'info' => 
          array (
            'name' => 'FullCalendar',
            'description' => 'Provides a views style plugin for FullCalendar',
            'core' => '7.x',
            'package' => 'FullCalendar',
            'configure' => 'admin/config/user-interface/fullcalendar',
            'dependencies' => 
            array (
              0 => 'views',
              1 => 'date',
              2 => 'date_views',
            ),
            'files' => 
            array (
              0 => 'includes/views/handlers/fullcalendar_handler_field_gcal.inc',
              1 => 'includes/views/plugins/fullcalendar_plugin_style_fullcalendar.inc',
            ),
            'version' => '7.x-2.0+5-dev',
            'project' => 'fullcalendar',
            'datestamp' => '1447964458',
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'version' => '7.x-2.0+5-dev',
        ),
        'colorizer' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/colorizer/colorizer.module',
          'basename' => 'colorizer.module',
          'name' => 'colorizer',
          'info' => 
          array (
            'name' => 'Colorizer',
            'description' => 'Colorize your theme',
            'core' => '7.x',
            'version' => '7.x-1.7',
            'project' => 'colorizer',
            'datestamp' => '1430943484',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7100',
          'version' => '7.x-1.7',
        ),
        'og_subgroups' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/og_subgroups/og_subgroups.module',
          'basename' => 'og_subgroups.module',
          'name' => 'og_subgroups',
          'info' => 
          array (
            'name' => 'Organic groups subgroups',
            'description' => 'Enable the permission system to be aware of the group hierarchy.',
            'package' => 'Organic groups',
            'dependencies' => 
            array (
              0 => 'og',
            ),
            'core' => '7.x',
            'version' => '7.x-2.0-beta4',
            'files' => 
            array (
              0 => 'og_subgroups.module',
              1 => 'og_subgroups.test',
              2 => 'plugins/views/og_subgroups_plugin_argument_default_user_groups.inc',
            ),
            'project' => 'og_subgroups',
            'datestamp' => '1445442242',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0-beta4',
        ),
        'defaultconfig' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/defaultconfig/defaultconfig.module',
          'basename' => 'defaultconfig.module',
          'name' => 'defaultconfig',
          'info' => 
          array (
            'name' => 'Default config',
            'description' => 'Use features as default configuration without having to deal with overridden features.',
            'core' => '7.x',
            'package' => 'Configuration',
            'dependencies' => 
            array (
              0 => 'features',
            ),
            'version' => '7.x-1.0-alpha11',
            'project' => 'defaultconfig',
            'datestamp' => '1443688148',
            'php' => '5.2.4',
          ),
          'schema_version' => '7101',
          'version' => '7.x-1.0-alpha11',
        ),
        'options_element' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/options_element/options_element.module',
          'basename' => 'options_element.module',
          'name' => 'options_element',
          'info' => 
          array (
            'name' => 'Options element',
            'description' => 'A custom form element for entering the options in select lists, radios, or checkboxes.',
            'core' => '7.x',
            'package' => 'User interface',
            'version' => '7.x-1.12',
            'project' => 'options_element',
            'datestamp' => '1397696072',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.12',
        ),
        'mailcomment_notifications' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/mailcomment/modules/mailcomment_notifications/mailcomment_notifications.module',
          'basename' => 'mailcomment_notifications.module',
          'name' => 'mailcomment_notifications',
          'info' => 
          array (
            'name' => 'Mail Comment Notifications',
            'description' => 'Integrates Mail Comment and Notifications',
            'package' => 'Mail Comment',
            'dependencies' => 
            array (
              0 => 'mailcomment',
              1 => 'notifications',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'tests/mailcomment_notifications.test',
            ),
            'version' => '7.x-2.4+13-dev',
            'project' => 'mailcomment',
            'datestamp' => '1447964446',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.4+13-dev',
        ),
        'mailcomment_default' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/mailcomment/modules/mailcomment_default/mailcomment_default.module',
          'basename' => 'mailcomment_default.module',
          'name' => 'mailcomment_default',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'mailcomment',
              1 => 'feeds_ui',
              2 => 'feeds_comment_processor',
              3 => 'features',
            ),
            'description' => 'An example Mail Comment Feeds importer to get you started',
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'feeds:feeds_importer_default:1',
              ),
              'feeds_importer' => 
              array (
                0 => 'mailhandler_comments',
              ),
            ),
            'name' => 'Mail Comment quick-start',
            'package' => 'Mail Comment',
            'version' => '7.x-2.4+13-dev',
            'project' => 'mailcomment',
            'datestamp' => '1447964446',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.4+13-dev',
        ),
        'mailcomment_message_notify' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/mailcomment/modules/mailcomment_message_notify/mailcomment_message_notify.module',
          'basename' => 'mailcomment_message_notify.module',
          'name' => 'mailcomment_message_notify',
          'info' => 
          array (
            'name' => 'Mail Comment Message Notify',
            'description' => 'Integrates Mail Comment and Message Notify',
            'package' => 'Mail Comment',
            'dependencies' => 
            array (
              0 => 'mailcomment',
              1 => 'message_notify',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'tests/mailcomment_message_notify.test',
            ),
            'version' => '7.x-2.4+13-dev',
            'project' => 'mailcomment',
            'datestamp' => '1447964446',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.4+13-dev',
        ),
        'mailcomment' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/mailcomment/mailcomment.module',
          'basename' => 'mailcomment.module',
          'name' => 'mailcomment',
          'info' => 
          array (
            'name' => 'Mail Comment',
            'description' => 'Gateway module for responding to posts via mail',
            'package' => 'Mail Comment',
            'dependencies' => 
            array (
              0 => 'mailhandler (>1.99)',
              1 => 'comment',
            ),
            'test_dependencies' => 
            array (
              0 => 'views',
              1 => 'entityreference',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'plugins/authenticate/MailcommentAuthenticate.class.php',
            ),
            'version' => '7.x-2.4+13-dev',
            'project' => 'mailcomment',
            'datestamp' => '1447964446',
            'php' => '5.2.4',
          ),
          'schema_version' => '7202',
          'version' => '7.x-2.4+13-dev',
        ),
        'panelizer' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/panelizer/panelizer.module',
          'basename' => 'panelizer.module',
          'name' => 'panelizer',
          'info' => 
          array (
            'name' => 'Panelizer',
            'description' => 'Allow any node type to have custom panel displays, similar to the panel node type.',
            'package' => 'Panels',
            'dependencies' => 
            array (
              0 => 'panels (>= 3.5)',
              1 => 'ctools (>= 1.6)',
              2 => 'page_manager',
            ),
            'core' => '7.x',
            'configure' => 'admin/structure/panelizer',
            'files' => 
            array (
              0 => 'plugins/entity/PanelizerEntityDefault.class.php',
              1 => 'plugins/search_api/PanelizerSearchApiAlterCallback.class.php',
              2 => 'plugins/views/panelizer_handler_field_link.inc',
              3 => 'plugins/views/panelizer_handler_panelizer_status.inc',
              4 => 'plugins/views/panelizer_handler_filter_panelizer_status.inc',
              5 => 'plugins/views/panelizer_plugin_row_panelizer_node_view.inc',
              6 => 'panelizer.test',
            ),
            'version' => '7.x-3.2-beta1+41-dev',
            'project' => 'panelizer',
            'datestamp' => '1447964443',
            'php' => '5.2.4',
          ),
          'schema_version' => '7121',
          'version' => '7.x-3.2-beta1+41-dev',
        ),
        'date_facets' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/date_facets/date_facets.module',
          'basename' => 'date_facets.module',
          'name' => 'date_facets',
          'info' => 
          array (
            'name' => 'Date Facets',
            'description' => 'Provides date range facets that are similar to implementations in major search engines.',
            'dependencies' => 
            array (
              0 => 'facetapi',
            ),
            'package' => 'Search Toolkit',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'lib/Drupal/Apachesolr/Facetapi/QueryType/DateRangeQueryType.php',
              1 => 'lib/Drupal/Facetapi/Widget/DateRangeWidget.php',
              2 => 'lib/Drupal/Search/Facetapi/QueryType/DateRangeQueryType.php',
              3 => 'lib/Drupal/SearchApi/Facetapi/QueryType/DateRangeQueryType.php',
            ),
            'version' => '7.x-1.0-beta2+15-dev',
            'project' => 'date_facets',
            'datestamp' => '1447964467',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta2+15-dev',
        ),
        'conditional_fields' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/conditional_fields/conditional_fields.module',
          'basename' => 'conditional_fields.module',
          'name' => 'conditional_fields',
          'info' => 
          array (
            'name' => 'Conditional Fields',
            'description' => 'Define dependencies between fields based on their states and values.',
            'core' => '7.x',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'system (>=7.14)',
              1 => 'field',
            ),
            'configure' => 'admin/structure/dependencies',
            'version' => '7.x-3.0-alpha2+0-dev',
            'project' => 'conditional_fields',
            'datestamp' => '1447964468',
            'php' => '5.2.4',
          ),
          'schema_version' => '7002',
          'version' => '7.x-3.0-alpha2+0-dev',
        ),
        'ctools_access_ruleset' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
          'basename' => 'ctools_access_ruleset.module',
          'name' => 'ctools_access_ruleset',
          'info' => 
          array (
            'name' => 'Custom rulesets',
            'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.9',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'page_manager' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/ctools/page_manager/page_manager.module',
          'basename' => 'page_manager.module',
          'name' => 'page_manager',
          'info' => 
          array (
            'name' => 'Page manager',
            'description' => 'Provides a UI and API to manage pages within the site.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.9',
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'bulk_export' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/ctools/bulk_export/bulk_export.module',
          'basename' => 'bulk_export.module',
          'name' => 'bulk_export',
          'info' => 
          array (
            'name' => 'Bulk Export',
            'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.9',
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'term_depth' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/ctools/term_depth/term_depth.module',
          'basename' => 'term_depth.module',
          'name' => 'term_depth',
          'info' => 
          array (
            'name' => 'Term Depth access',
            'description' => 'Controls access to context based upon term depth',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.9',
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'ctools_ajax_sample' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
          'basename' => 'ctools_ajax_sample.module',
          'name' => 'ctools_ajax_sample',
          'info' => 
          array (
            'name' => 'Chaos Tools (CTools) AJAX Example',
            'description' => 'Shows how to use the power of Chaos AJAX.',
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.9',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'core' => '7.x',
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'ctools_plugin_example' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
          'basename' => 'ctools_plugin_example.module',
          'name' => 'ctools_plugin_example',
          'info' => 
          array (
            'name' => 'Chaos Tools (CTools) Plugin Example',
            'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.9',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'panels',
              2 => 'page_manager',
              3 => 'advanced_help',
            ),
            'core' => '7.x',
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'views_content' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/ctools/views_content/views_content.module',
          'basename' => 'views_content.module',
          'name' => 'views_content',
          'info' => 
          array (
            'name' => 'Views content panes',
            'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'views',
            ),
            'core' => '7.x',
            'version' => '7.x-1.9',
            'files' => 
            array (
              0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
              1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
              2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
            ),
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'stylizer' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/ctools/stylizer/stylizer.module',
          'basename' => 'stylizer.module',
          'name' => 'stylizer',
          'info' => 
          array (
            'name' => 'Stylizer',
            'description' => 'Create custom styles for applications such as Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.9',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'color',
            ),
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'ctools_custom_content' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
          'basename' => 'ctools_custom_content.module',
          'name' => 'ctools_custom_content',
          'info' => 
          array (
            'name' => 'Custom content panes',
            'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.9',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.9',
        ),
        'ctools' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/ctools/ctools.module',
          'basename' => 'ctools.module',
          'name' => 'ctools',
          'info' => 
          array (
            'name' => 'Chaos tools',
            'description' => 'A library of helpful tools by Merlin of Chaos.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.9',
            'files' => 
            array (
              0 => 'includes/context.inc',
              1 => 'includes/css-cache.inc',
              2 => 'includes/math-expr.inc',
              3 => 'includes/stylizer.inc',
              4 => 'tests/css_cache.test',
            ),
            'project' => 'ctools',
            'datestamp' => '1440020680',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.9',
        ),
        'select2widget' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/select2widget/select2widget.module',
          'basename' => 'select2widget.module',
          'name' => 'select2widget',
          'info' => 
          array (
            'name' => 'Select2Widget',
            'description' => 'Module provides widget for select fields that allow to use Select2 (is a jQuery based replacement for select boxes).',
            'core' => '7.x',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'options',
              2 => 'libraries',
              3 => 'jquery_update',
            ),
            'version' => '7.x-2.7+3-dev',
            'project' => 'select2widget',
            'datestamp' => '1447964462',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.7+3-dev',
        ),
        'views_autocomplete_filters' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/views_autocomplete_filters/views_autocomplete_filters.module',
          'basename' => 'views_autocomplete_filters.module',
          'name' => 'views_autocomplete_filters',
          'info' => 
          array (
            'name' => 'Views Autocomplete Filters',
            'description' => 'Views Autocomplete Filters',
            'package' => 'Views',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'files' => 
            array (
              0 => 'views_autocomplete_filters.module',
              1 => 'views/views_autocomplete_filters.views.inc',
              2 => 'views/handlers/views_autocomplete_filters_handler_filter_string.inc',
              3 => 'views/handlers/views_autocomplete_filters_handler_filter_combine.inc',
            ),
            'version' => '7.x-1.2',
            'project' => 'views_autocomplete_filters',
            'datestamp' => '1426789405',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.2',
        ),
        'entity_token' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/entity/entity_token.module',
          'basename' => 'entity_token.module',
          'name' => 'entity_token',
          'info' => 
          array (
            'name' => 'Entity tokens',
            'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'entity_token.tokens.inc',
              1 => 'entity_token.module',
            ),
            'dependencies' => 
            array (
              0 => 'entity',
            ),
            'version' => '7.x-1.6',
            'project' => 'entity',
            'datestamp' => '1424876582',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.6',
        ),
        'entity' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/entity/entity.module',
          'basename' => 'entity.module',
          'name' => 'entity',
          'info' => 
          array (
            'name' => 'Entity API',
            'description' => 'Enables modules to work with any entity type and to provide entities.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'entity.features.inc',
              1 => 'entity.i18n.inc',
              2 => 'entity.info.inc',
              3 => 'entity.rules.inc',
              4 => 'entity.test',
              5 => 'includes/entity.inc',
              6 => 'includes/entity.controller.inc',
              7 => 'includes/entity.ui.inc',
              8 => 'includes/entity.wrapper.inc',
              9 => 'views/entity.views.inc',
              10 => 'views/handlers/entity_views_field_handler_helper.inc',
              11 => 'views/handlers/entity_views_handler_area_entity.inc',
              12 => 'views/handlers/entity_views_handler_field_boolean.inc',
              13 => 'views/handlers/entity_views_handler_field_date.inc',
              14 => 'views/handlers/entity_views_handler_field_duration.inc',
              15 => 'views/handlers/entity_views_handler_field_entity.inc',
              16 => 'views/handlers/entity_views_handler_field_field.inc',
              17 => 'views/handlers/entity_views_handler_field_numeric.inc',
              18 => 'views/handlers/entity_views_handler_field_options.inc',
              19 => 'views/handlers/entity_views_handler_field_text.inc',
              20 => 'views/handlers/entity_views_handler_field_uri.inc',
              21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
              22 => 'views/handlers/entity_views_handler_relationship.inc',
              23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
            ),
            'version' => '7.x-1.6',
            'project' => 'entity',
            'datestamp' => '1424876582',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7003',
          'version' => '7.x-1.6',
        ),
        'contextual_tabs' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/contextual_tabs/contextual_tabs.module',
          'basename' => 'contextual_tabs.module',
          'name' => 'contextual_tabs',
          'info' => 
          array (
            'name' => 'Contextual Tabs',
            'description' => 'Converts tabs to contextual links',
            'package' => 'Administration',
            'core' => '7.x',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'contextual_tabs.css',
              ),
            ),
            'version' => '7.x-1.0-beta5',
            'project' => 'contextual_tabs',
            'datestamp' => '1424466183',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta5',
        ),
        'media_vimeo' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/media_vimeo/media_vimeo.module',
          'basename' => 'media_vimeo.module',
          'name' => 'media_vimeo',
          'info' => 
          array (
            'name' => 'Media: Vimeo',
            'description' => 'Adds Vimeo as a supported media provider.',
            'package' => 'Media',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'media_internet',
            ),
            'files' => 
            array (
              0 => 'includes/MediaVimeoStreamWrapper.inc',
              1 => 'includes/MediaInternetVimeoHandler.inc',
            ),
            'version' => '7.x-2.1',
            'project' => 'media_vimeo',
            'datestamp' => '1432838585',
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.1',
        ),
        'installprofiletest' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/installprofiletest/installprofiletest.module',
          'basename' => 'installprofiletest.module',
          'name' => 'installprofiletest',
          'info' => 
          array (
            'name' => 'Install Profile Test',
            'description' => 'Test to help building install profiles',
            'files' => 
            array (
              0 => 'ahrq_core.module',
              1 => 'tests/installProfileTest.test',
            ),
            'package' => 'Development',
            'core' => '7.x',
            'version' => '7.x-1.x-dev',
            'project' => 'installprofiletest',
            'datestamp' => '1380583348',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.x-dev',
        ),
        'message_notify_example' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/message_notify/message_notify_example/message_notify_example.module',
          'basename' => 'message_notify_example.module',
          'name' => 'message_notify_example',
          'info' => 
          array (
            'name' => 'Message notify example',
            'description' => 'Message notify example',
            'core' => '7.x',
            'package' => 'Message',
            'php' => '5.2.4',
            'dependencies' => 
            array (
              0 => 'entity_token',
              1 => 'entityreference',
              2 => 'features',
              3 => 'message',
              4 => 'message_notify',
              5 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'views:views_default:3.0',
              ),
              'field' => 
              array (
                0 => 'message-comment_insert-field_comment_ref',
                1 => 'message-comment_insert-field_message_rendered_body',
                2 => 'message-comment_insert-field_message_rendered_subject',
              ),
              'message_type' => 
              array (
                0 => 'comment_insert',
              ),
              'views_view' => 
              array (
                0 => 'message_notify_example',
              ),
            ),
            'version' => '7.x-2.5',
            'project' => 'message_notify',
            'datestamp' => '1366630876',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'message_notify' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/message_notify/message_notify.module',
          'basename' => 'message_notify.module',
          'name' => 'message_notify',
          'info' => 
          array (
            'name' => 'Message notify',
            'description' => 'Message notify.',
            'core' => '7.x',
            'package' => 'Message',
            'dependencies' => 
            array (
              0 => 'message',
              1 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'includes/message_notify.exception.inc',
              1 => 'plugins/notifier/abstract.inc',
              2 => 'message_notify.test',
            ),
            'version' => '7.x-2.5',
            'project' => 'message_notify',
            'datestamp' => '1366630876',
            'php' => '5.2.4',
          ),
          'schema_version' => '7003',
          'version' => '7.x-2.5',
        ),
        'media_colorbox' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/media_colorbox/media_colorbox.module',
          'basename' => 'media_colorbox.module',
          'name' => 'media_colorbox',
          'info' => 
          array (
            'name' => 'Media Colorbox',
            'description' => 'Provides integration between the Media module (file entities) and the Colorbox module.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'media_colorbox.module',
            ),
            'dependencies' => 
            array (
              0 => 'file_entity',
              1 => 'colorbox',
            ),
            'scripts' => 
            array (
              0 => 'media_colorbox.js',
            ),
            'version' => '7.x-1.0-rc4+1-dev',
            'project' => 'media_colorbox',
            'datestamp' => '1447964443',
            'php' => '5.2.4',
          ),
          'schema_version' => '7101',
          'version' => '7.x-1.0-rc4+1-dev',
        ),
        'colors' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/colors/colors.module',
          'basename' => 'colors.module',
          'name' => 'colors',
          'info' => 
          array (
            'name' => 'Colors',
            'description' => 'API for coloring selectors.',
            'core' => '7.x',
            'configure' => 'admin/config/user-interface/colors',
            'version' => '7.x-1.0-rc1',
            'project' => 'colors',
            'datestamp' => '1347854520',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-rc1',
        ),
        'htmlmail' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/htmlmail/htmlmail.module',
          'basename' => 'htmlmail.module',
          'name' => 'htmlmail',
          'info' => 
          array (
            'package' => 'Mail',
            'name' => 'HTML Mail',
            'description' => 'Enables HTML in system emails.',
            'php' => '5.0',
            'files' => 
            array (
              0 => 'htmlmail.mail.inc',
            ),
            'dependencies' => 
            array (
              0 => 'mailsystem',
            ),
            'core' => '7.x',
            'configure' => 'admin/config/system/htmlmail',
            'version' => '7.x-2.65',
            'project' => 'htmlmail',
            'datestamp' => '1333660850',
          ),
          'schema_version' => '7203',
          'version' => '7.x-2.65',
        ),
        'command_buttons' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/command_buttons/command_buttons.module',
          'basename' => 'command_buttons.module',
          'name' => 'command_buttons',
          'info' => 
          array (
            'name' => 'Command Buttons',
            'description' => 'Provide command button entities and fieldable panels panes integration.',
            'core' => '7.x',
            'package' => 'Panels',
            'dependencies' => 
            array (
              0 => 'conditional_fields',
              1 => 'ctools',
              2 => 'entity',
              3 => 'entityreference',
              4 => 'features',
              5 => 'field_group',
              6 => 'fieldable_panels_panes',
              7 => 'link',
              8 => 'list',
              9 => 'options',
              10 => 'text',
              11 => 'views',
            ),
            'features' => 
            array (
              'conditional_fields' => 
              array (
                0 => 'fieldable_panels_pane:command_buttons',
              ),
              'ctools' => 
              array (
                0 => 'field_group:field_group:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_block_buttons',
                1 => 'field_button_size',
                2 => 'field_button_style',
                3 => 'field_command_link',
                4 => 'field_commands',
                5 => 'field_css_class',
                6 => 'field_dropdown_label',
                7 => 'field_link_icon',
                8 => 'field_use_dropdowns',
              ),
              'field_group' => 
              array (
                0 => 'group_icons|command_button|button|form',
              ),
              'field_instance' => 
              array (
                0 => 'command_button-button-field_command_link',
                1 => 'command_button-button-field_link_icon',
                2 => 'command_button-node_add-field_command_link',
                3 => 'fieldable_panels_pane-command_buttons-field_block_buttons',
                4 => 'fieldable_panels_pane-command_buttons-field_button_size',
                5 => 'fieldable_panels_pane-command_buttons-field_button_style',
                6 => 'fieldable_panels_pane-command_buttons-field_commands',
                7 => 'fieldable_panels_pane-command_buttons-field_css_class',
                8 => 'fieldable_panels_pane-command_buttons-field_dropdown_label',
                9 => 'fieldable_panels_pane-command_buttons-field_use_dropdowns',
              ),
            ),
            'files' => 
            array (
              0 => 'command_buttons.module',
              1 => 'includes/ButtonController.class.php',
              2 => 'plugins/views/command_buttons.views.inc',
              3 => 'plugins/views/command_buttons.views_default.inc',
              4 => 'plugins/views/command_buttons_handler_argument_bundle.inc',
              5 => 'plugins/views/command_buttons_handler_field_bundle.inc',
              6 => 'plugins/views/command_buttons_handler_field_delete_entity.inc',
              7 => 'plugins/views/command_buttons_handler_field_edit_entity.inc',
              8 => 'plugins/views/command_buttons_handler_field_view_entity.inc',
              9 => 'plugins/views/command_buttons_handler_filter_bundle.inc',
            ),
            'version' => '7.x-1.12',
            'project' => 'command_buttons',
            'datestamp' => '1442241547',
            'php' => '5.2.4',
          ),
          'schema_version' => '7105',
          'version' => '7.x-1.12',
        ),
        'chosen' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/chosen/chosen.module',
          'basename' => 'chosen.module',
          'name' => 'chosen',
          'info' => 
          array (
            'name' => 'Chosen',
            'description' => 'Makes select elements more user-friendly using <a href="http://harvesthq.github.com/chosen/">Chosen</a>.',
            'package' => 'User interface',
            'configure' => 'admin/config/user-interface/chosen',
            'core' => '7.x',
            'version' => '7.x-2.0-beta4',
            'project' => 'chosen',
            'datestamp' => '1394256505',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7203',
          'version' => '7.x-2.0-beta4',
        ),
        'message_subscribe_email' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/message_subscribe/message_subscribe_email/message_subscribe_email.module',
          'basename' => 'message_subscribe_email.module',
          'name' => 'message_subscribe_email',
          'info' => 
          array (
            'name' => 'Message subscribe email',
            'core' => '7.x',
            'php' => '5.2.4',
            'version' => '7.x-1.0-rc2',
            'project' => 'message_subscribe',
            'dependencies' => 
            array (
              0 => 'flag',
              1 => 'list',
              2 => 'views',
            ),
            'files' => 
            array (
              0 => 'message_subscribe_email.test',
            ),
            'datestamp' => '1396169645',
            'description' => '',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-rc2',
        ),
        'message_subscribe_ui' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/message_subscribe/message_subscribe_ui/message_subscribe_ui.module',
          'basename' => 'message_subscribe_ui.module',
          'name' => 'message_subscribe_ui',
          'info' => 
          array (
            'name' => 'Message subscribe UI',
            'description' => 'Message subscribe UI',
            'core' => '7.x',
            'package' => 'Message',
            'php' => '5.2.4',
            'version' => '7.x-1.0-rc2',
            'project' => 'message_subscribe',
            'dependencies' => 
            array (
              0 => 'message_subscribe',
              1 => 'views',
              2 => 'views_content',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'views_view' => 
              array (
                0 => 'subscribe_node',
                1 => 'subscribe_taxonomy_term',
                2 => 'subscribe_user',
              ),
            ),
            'datestamp' => '1396169645',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-rc2',
        ),
        'message_subscribe' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/message_subscribe/message_subscribe.module',
          'basename' => 'message_subscribe.module',
          'name' => 'message_subscribe',
          'info' => 
          array (
            'name' => 'Message subscribe',
            'description' => 'Subscribe API for the Message and Message notify modules.',
            'core' => '7.x',
            'package' => 'Message',
            'php' => '5.2.4',
            'project' => 'message_subscribe',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'flag',
              2 => 'message',
              3 => 'message_notify',
            ),
            'files' => 
            array (
              0 => 'message_subscribe.test',
            ),
            'version' => '7.x-1.0-rc2',
            'datestamp' => '1396169645',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-rc2',
        ),
        'pathauto' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/pathauto/pathauto.module',
          'basename' => 'pathauto.module',
          'name' => 'pathauto',
          'info' => 
          array (
            'name' => 'Pathauto',
            'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
            'dependencies' => 
            array (
              0 => 'path',
              1 => 'token',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'pathauto.test',
            ),
            'configure' => 'admin/config/search/path/patterns',
            'recommends' => 
            array (
              0 => 'redirect',
            ),
            'version' => '7.x-1.2',
            'project' => 'pathauto',
            'datestamp' => '1344525185',
            'php' => '5.2.4',
          ),
          'schema_version' => '7006',
          'version' => '7.x-1.2',
        ),
        'wysiwyg' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/wysiwyg/wysiwyg.module',
          'basename' => 'wysiwyg.module',
          'name' => 'wysiwyg',
          'info' => 
          array (
            'name' => 'Wysiwyg',
            'description' => 'Allows to edit content with client-side editors.',
            'package' => 'User interface',
            'core' => '7.x',
            'configure' => 'admin/config/content/wysiwyg',
            'files' => 
            array (
              0 => 'wysiwyg.module',
              1 => 'tests/wysiwyg.test',
            ),
            'version' => '7.x-2.2',
            'project' => 'wysiwyg',
            'datestamp' => '1349213776',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'version' => '7.x-2.2',
        ),
        'jquery_update' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/jquery_update/jquery_update.module',
          'basename' => 'jquery_update.module',
          'name' => 'jquery_update',
          'info' => 
          array (
            'name' => 'jQuery Update',
            'description' => 'Update jQuery and jQuery UI to a more recent version.',
            'package' => 'User interface',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'jquery_update.module',
              1 => 'jquery_update.install',
            ),
            'configure' => 'admin/config/development/jquery_update',
            'version' => '7.x-2.7',
            'project' => 'jquery_update',
            'datestamp' => '1445379855',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-2.7',
        ),
        'libraries' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/libraries/libraries.module',
          'basename' => 'libraries.module',
          'name' => 'libraries',
          'info' => 
          array (
            'name' => 'Libraries',
            'description' => 'Allows version-dependent and shared usage of external libraries.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'system (>=7.11)',
            ),
            'files' => 
            array (
              0 => 'tests/libraries.test',
            ),
            'version' => '7.x-2.2',
            'project' => 'libraries',
            'datestamp' => '1391965716',
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'version' => '7.x-2.2',
        ),
        'token' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/token/token.module',
          'basename' => 'token.module',
          'name' => 'token',
          'info' => 
          array (
            'name' => 'Token',
            'description' => 'Provides a user interface for the Token API and some missing core tokens.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'token.test',
            ),
            'version' => '7.x-1.6',
            'project' => 'token',
            'datestamp' => '1425149060',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.6',
        ),
        'geocoder' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/geocoder/geocoder.module',
          'basename' => 'geocoder.module',
          'name' => 'geocoder',
          'info' => 
          array (
            'name' => 'Geocoder',
            'description' => 'An API and widget to geocode various known data into other GIS data types.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'geophp',
              1 => 'ctools',
            ),
            'version' => '7.x-1.2+9-dev',
            'project' => 'geocoder',
            'datestamp' => '1447964457',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.2+9-dev',
        ),
        'plupload' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/plupload/plupload.module',
          'basename' => 'plupload.module',
          'name' => 'plupload',
          'info' => 
          array (
            'name' => 'Plupload integration module',
            'description' => 'Provides a plupload element.',
            'files' => 
            array (
              0 => 'plupload.module',
            ),
            'core' => '7.x',
            'package' => 'Media',
            'version' => '7.x-1.7',
            'project' => 'plupload',
            'datestamp' => '1415390716',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.7',
        ),
        'comment_alter' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/comment_alter/comment_alter.module',
          'basename' => 'comment_alter.module',
          'name' => 'comment_alter',
          'info' => 
          array (
            'name' => 'Comment alter',
            'description' => 'Provides UI to alter nodes\' parameters from comment forms.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'comment',
              1 => 'diff (3.x)',
            ),
            'files' => 
            array (
              0 => 'comment_alter.test',
            ),
            'version' => '7.x-1.0-rc4+17-dev',
            'project' => 'comment_alter',
            'datestamp' => '1447964455',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-rc4+17-dev',
        ),
        'og_menu_single' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/og_menu_single/og_menu_single.module',
          'basename' => 'og_menu_single.module',
          'name' => 'og_menu_single',
          'info' => 
          array (
            'name' => 'OG Menu Single',
            'description' => 'Provides a single custom menu per organic group',
            'dependencies' => 
            array (
              0 => 'menu',
              1 => 'og (2.x)',
              2 => 'og_context',
            ),
            'package' => 'Organic groups',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'tests/og_menu_singleBase.test',
            ),
            'version' => '7.x-1.0-beta2',
            'project' => 'og_menu_single',
            'datestamp' => '1415382781',
            'php' => '5.2.4',
          ),
          'schema_version' => '7102',
          'version' => '7.x-1.0-beta2',
        ),
        'features' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/features/features.module',
          'basename' => 'features.module',
          'name' => 'features',
          'info' => 
          array (
            'name' => 'Features',
            'description' => 'Provides feature management for Drupal.',
            'core' => '7.x',
            'package' => 'Features',
            'files' => 
            array (
              0 => 'tests/features.test',
            ),
            'configure' => 'admin/structure/features/settings',
            'version' => '7.x-2.7',
            'project' => 'features',
            'datestamp' => '1444829630',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'version' => '7.x-2.7',
        ),
        'markdown' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/markdown/markdown.module',
          'basename' => 'markdown.module',
          'name' => 'markdown',
          'info' => 
          array (
            'name' => 'Markdown filter',
            'description' => 'Allows content to be submitted using Markdown, a simple plain-text syntax that is transformed into valid XHTML.',
            'package' => 'Input filters',
            'core' => '7.x',
            'version' => '7.x-1.1',
            'project' => 'markdown',
            'datestamp' => '1353934650',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.1',
        ),
        'radix_layouts' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/radix_layouts/radix_layouts.module',
          'basename' => 'radix_layouts.module',
          'name' => 'radix_layouts',
          'info' => 
          array (
            'name' => 'Radix Layouts',
            'description' => 'Responsive panels layouts set to work with Panopoly and the Radix theme',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'panels',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'radix_layouts.css',
              ),
            ),
            'version' => '7.x-3.4',
            'project' => 'radix_layouts',
            'datestamp' => '1433951891',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-3.4',
        ),
        'date_ical' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/date_ical/date_ical.module',
          'basename' => 'date_ical.module',
          'name' => 'date_ical',
          'info' => 
          array (
            'name' => 'Date iCal',
            'description' => 'Enables export of iCal feeds using Views, and import of iCal feeds using Feeds.',
            'package' => 'Date/Time',
            'php' => '5.3',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'views (>=7.x-3.5)',
              1 => 'date_views',
              2 => 'entity',
              3 => 'libraries (>=7.x-2.0)',
              4 => 'date',
              5 => 'date_api',
            ),
            'files' => 
            array (
              0 => 'includes/date_ical_plugin_row_ical_entity.inc',
              1 => 'includes/date_ical_plugin_row_ical_fields.inc',
              2 => 'includes/date_ical_plugin_style_ical_feed.inc',
              3 => 'includes/DateiCalFeedsParser.inc',
            ),
            'version' => '7.x-3.5',
            'project' => 'date_ical',
            'datestamp' => '1437419644',
          ),
          'schema_version' => '7300',
          'version' => '7.x-3.5',
        ),
        'apps' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/apps/apps.module',
          'basename' => 'apps.module',
          'name' => 'apps',
          'info' => 
          array (
            'name' => 'Apps',
            'description' => 'Provides Interface for Install Apps from A drupal app server',
            'package' => 'Distribution Management',
            'core' => '7.x',
            'configure' => 'admin/config/system/apps',
            'dependencies' => 
            array (
              0 => 'update',
            ),
            'files' => 
            array (
              0 => 'apps.module',
              1 => 'apps.updater.inc',
              2 => 'apps.installer.inc',
              3 => 'apps.test',
            ),
            'version' => '7.x-1.0',
            'project' => 'apps',
            'datestamp' => '1435090990',
            'php' => '5.2.4',
          ),
          'schema_version' => '7102',
          'version' => '7.x-1.0',
        ),
        'date_popup_authored' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/date_popup_authored/date_popup_authored.module',
          'basename' => 'date_popup_authored.module',
          'name' => 'date_popup_authored',
          'info' => 
          array (
            'name' => 'Date Popup Authored',
            'description' => 'Provides a datepicker for the \'Authored on\' field on node forms.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'date_popup_authored.test',
            ),
            'package' => 'Date/Time',
            'dependencies' => 
            array (
              0 => 'date_popup',
            ),
            'version' => '7.x-1.1+2-dev',
            'project' => 'date_popup_authored',
            'datestamp' => '1447964427',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.1+2-dev',
        ),
        'panels_node' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/panels/panels_node/panels_node.module',
          'basename' => 'panels_node.module',
          'name' => 'panels_node',
          'info' => 
          array (
            'name' => 'Panel nodes',
            'description' => 'Create nodes that are divided into areas with selectable content.',
            'package' => 'Panels',
            'version' => '7.x-3.5',
            'dependencies' => 
            array (
              0 => 'panels',
            ),
            'configure' => 'admin/structure/panels',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'panels_node.module',
            ),
            'project' => 'panels',
            'datestamp' => '1422472985',
            'php' => '5.2.4',
          ),
          'schema_version' => '6001',
          'version' => '7.x-3.5',
        ),
        'i18n_panels' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/panels/i18n_panels/i18n_panels.module',
          'basename' => 'i18n_panels.module',
          'name' => 'i18n_panels',
          'info' => 
          array (
            'name' => 'Panels translation',
            'description' => 'Supports translatable panels items.',
            'dependencies' => 
            array (
              0 => 'i18n',
              1 => 'panels',
              2 => 'i18n_string',
              3 => 'i18n_translation',
            ),
            'package' => 'Multilingual - Internationalization',
            'core' => '7.x',
            'version' => '7.x-3.5',
            'project' => 'panels',
            'datestamp' => '1422472985',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-3.5',
        ),
        'panels_mini' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/panels/panels_mini/panels_mini.module',
          'basename' => 'panels_mini.module',
          'name' => 'panels_mini',
          'info' => 
          array (
            'name' => 'Mini panels',
            'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
            'package' => 'Panels',
            'version' => '7.x-3.5',
            'dependencies' => 
            array (
              0 => 'panels',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'plugins/export_ui/panels_mini_ui.class.php',
            ),
            'project' => 'panels',
            'datestamp' => '1422472985',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-3.5',
        ),
        'panels_ipe' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/panels/panels_ipe/panels_ipe.module',
          'basename' => 'panels_ipe.module',
          'name' => 'panels_ipe',
          'info' => 
          array (
            'name' => 'Panels In-Place Editor',
            'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
            'package' => 'Panels',
            'version' => '7.x-3.5',
            'dependencies' => 
            array (
              0 => 'panels',
            ),
            'core' => '7.x',
            'configure' => 'admin/structure/panels',
            'files' => 
            array (
              0 => 'panels_ipe.module',
            ),
            'project' => 'panels',
            'datestamp' => '1422472985',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-3.5',
        ),
        'panels' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/panels/panels.module',
          'basename' => 'panels.module',
          'name' => 'panels',
          'info' => 
          array (
            'name' => 'Panels',
            'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
            'core' => '7.x',
            'package' => 'Panels',
            'version' => '7.x-3.5',
            'configure' => 'admin/structure/panels',
            'dependencies' => 
            array (
              0 => 'ctools (>1.5)',
            ),
            'files' => 
            array (
              0 => 'panels.module',
              1 => 'includes/common.inc',
              2 => 'includes/legacy.inc',
              3 => 'includes/plugins.inc',
              4 => 'plugins/views/panels_views_plugin_row_fields.inc',
            ),
            'project' => 'panels',
            'datestamp' => '1422472985',
            'php' => '5.2.4',
          ),
          'schema_version' => '7303',
          'version' => '7.x-3.5',
        ),
        'navbar' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/navbar/navbar.module',
          'basename' => 'navbar.module',
          'name' => 'navbar',
          'info' => 
          array (
            'name' => 'Mobile Friendly Navigation Toolbar',
            'description' => 'A very simple mobile friendly toolbar that lets you switch between frontend and backend.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'breakpoints',
              1 => 'libraries',
            ),
            'version' => '7.x-1.0-alpha10+8-dev',
            'project' => 'navbar',
            'datestamp' => '1447964427',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-alpha10+8-dev',
        ),
        'bootstrap_library' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/bootstrap_library/bootstrap_library.module',
          'basename' => 'bootstrap_library.module',
          'name' => 'bootstrap_library',
          'info' => 
          array (
            'name' => 'Bootstrap Library',
            'description' => 'Register Boostrap as a library by installing files in /sites/all/libraries/bootstrap.',
            'package' => 'Twitter Bootstrap',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'libraries',
            ),
            'configure' => 'admin/config/development/bootstrap_library',
            'version' => '7.x-1.4',
            'project' => 'bootstrap_library',
            'datestamp' => '1399825431',
            'php' => '5.2.4',
          ),
          'schema_version' => '7003',
          'version' => '7.x-1.4',
        ),
        'flag' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/flag/flag.module',
          'basename' => 'flag.module',
          'name' => 'flag',
          'info' => 
          array (
            'name' => 'Flag',
            'description' => 'Create customized flags that users can set on content.',
            'core' => '7.x',
            'package' => 'Flags',
            'configure' => 'admin/structure/flags',
            'files' => 
            array (
              0 => 'flag.inc',
              1 => 'flag.rules.inc',
              2 => 'includes/flag_handler_argument_content_id.inc',
              3 => 'includes/flag_handler_field_ops.inc',
              4 => 'includes/flag_handler_filter_flagged.inc',
              5 => 'includes/flag_handler_sort_flagged.inc',
              6 => 'includes/flag_handler_relationships.inc',
              7 => 'includes/flag_plugin_argument_validate_flaggability.inc',
              8 => 'tests/flag.test',
            ),
            'version' => '7.x-2.2-dev',
            'project' => 'flag',
            'datestamp' => '1447964468',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7204',
          'version' => '7.x-2.2-dev',
        ),
        'flag_actions' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/flag/flag_actions.module',
          'basename' => 'flag_actions.module',
          'name' => 'flag_actions',
          'info' => 
          array (
            'name' => 'Flag actions',
            'description' => 'Execute actions on Flag events.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'flag',
            ),
            'package' => 'Flags',
            'configure' => 'admin/structure/webform/flags',
            'files' => 
            array (
              0 => 'flag.install',
              1 => 'flag_actions.module',
            ),
            'version' => '7.x-2.2-dev',
            'project' => 'flag',
            'datestamp' => '1447964468',
            'php' => '5.2.4',
          ),
          'schema_version' => '6200',
          'version' => '7.x-2.2-dev',
        ),
        'current_search' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/facetapi/contrib/current_search/current_search.module',
          'basename' => 'current_search.module',
          'name' => 'current_search',
          'info' => 
          array (
            'name' => 'Current Search Blocks',
            'description' => 'Provides an interface for creating blocks containing information about the current search.',
            'dependencies' => 
            array (
              0 => 'facetapi',
            ),
            'package' => 'Search Toolkit',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'plugins/current_search/item.inc',
              1 => 'plugins/current_search/item_active.inc',
              2 => 'plugins/current_search/item_group.inc',
              3 => 'plugins/current_search/item_text.inc',
              4 => 'tests/current_search.test',
            ),
            'configure' => 'admin/config/search/current_search',
            'version' => '7.x-1.5',
            'project' => 'facetapi',
            'datestamp' => '1405685332',
            'php' => '5.2.4',
          ),
          'schema_version' => '7101',
          'version' => '7.x-1.5',
        ),
        'facetapi' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/facetapi/facetapi.module',
          'basename' => 'facetapi.module',
          'name' => 'facetapi',
          'info' => 
          array (
            'name' => 'Facet API',
            'description' => 'An abstracted facet API that can be used by various search backends.',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'package' => 'Search Toolkit',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'plugins/facetapi/adapter.inc',
              1 => 'plugins/facetapi/dependency.inc',
              2 => 'plugins/facetapi/dependency_bundle.inc',
              3 => 'plugins/facetapi/dependency_role.inc',
              4 => 'plugins/facetapi/empty_behavior.inc',
              5 => 'plugins/facetapi/empty_behavior_text.inc',
              6 => 'plugins/facetapi/filter.inc',
              7 => 'plugins/facetapi/query_type.inc',
              8 => 'plugins/facetapi/url_processor.inc',
              9 => 'plugins/facetapi/url_processor_standard.inc',
              10 => 'plugins/facetapi/widget.inc',
              11 => 'plugins/facetapi/widget_links.inc',
              12 => 'tests/facetapi_test.plugins.inc',
              13 => 'tests/facetapi.test',
            ),
            'version' => '7.x-1.5',
            'project' => 'facetapi',
            'datestamp' => '1405685332',
            'php' => '5.2.4',
          ),
          'schema_version' => '7103',
          'version' => '7.x-1.5',
        ),
        'panels_breadcrumbs' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/panels_breadcrumbs/panels_breadcrumbs.module',
          'basename' => 'panels_breadcrumbs.module',
          'name' => 'panels_breadcrumbs',
          'info' => 
          array (
            'name' => 'Panels Breadcrumbs',
            'description' => 'Adds the ability to set breadcrumbs directly from Panels and takes advantage of arguments and contexts as placeholder tokens',
            'core' => '7.x',
            'package' => 'Panels',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'page_manager',
              2 => 'panels',
            ),
            'version' => '7.x-2.2',
            'project' => 'panels_breadcrumbs',
            'datestamp' => '1410481728',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.2',
        ),
        'linkit' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/linkit/linkit.module',
          'basename' => 'linkit.module',
          'name' => 'linkit',
          'info' => 
          array (
            'name' => 'Linkit',
            'description' => 'Provides an easy interface for inserting links.',
            'core' => '7.x',
            'configure' => 'admin/config/content/linkit',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'entity',
            ),
            'files' => 
            array (
              0 => 'includes/profile.class.php',
              1 => 'includes/search_plugin.class.php',
              2 => 'plugins/linkit_search/entity.class.php',
              3 => 'plugins/linkit_search/file.class.php',
              4 => 'plugins/linkit_search/node.class.php',
              5 => 'plugins/linkit_search/taxonomy_term.class.php',
              6 => 'plugins/linkit_search/user.class.php',
              7 => 'test/linkit.test',
              8 => 'test/linkit_profile.test',
              9 => 'test/linkit_search_plugin.test',
              10 => 'test/linkit_search_plugin_node.test',
              11 => 'test/linkit_search_plugin_user.test',
              12 => 'test/linkit_search_plugin_taxonomy_term.test',
              13 => 'test/linkit_field.test',
            ),
            'version' => '7.x-3.4',
            'project' => 'linkit',
            'datestamp' => '1439163242',
            'php' => '5.2.4',
          ),
          'schema_version' => '7302',
          'version' => '7.x-3.4',
        ),
        'mailsystem' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/mailsystem/mailsystem.module',
          'basename' => 'mailsystem.module',
          'name' => 'mailsystem',
          'info' => 
          array (
            'package' => 'Mail',
            'name' => 'Mail System',
            'description' => 'Provides a user interface for per-module and site-wide mail_system selection.',
            'php' => '5.0',
            'core' => '7.x',
            'configure' => 'admin/config/system/mailsystem',
            'dependencies' => 
            array (
              0 => 'filter',
            ),
            'version' => '7.x-2.34',
            'project' => 'mailsystem',
            'datestamp' => '1334082653',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.34',
        ),
        'menu_block_export' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/menu_block/menu_block_export.module',
          'basename' => 'menu_block_export.module',
          'name' => 'menu_block_export',
          'info' => 
          array (
            'name' => 'Menu Block Export',
            'description' => 'Provides export interface for Menu block module.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'menu_block',
            ),
            'files' => 
            array (
              0 => 'menu_block_export.module',
              1 => 'menu_block_export.admin.inc',
            ),
            'configure' => 'admin/config/user-interface/menu-block/export',
            'version' => '7.x-2.7',
            'project' => 'menu_block',
            'datestamp' => '1435676232',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.7',
        ),
        'menu_block' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/menu_block/menu_block.module',
          'basename' => 'menu_block.module',
          'name' => 'menu_block',
          'info' => 
          array (
            'name' => 'Menu Block',
            'description' => 'Provides configurable blocks of menu items.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'menu (>7.11)',
            ),
            'configure' => 'admin/config/user-interface/menu-block',
            'version' => '7.x-2.7',
            'project' => 'menu_block',
            'datestamp' => '1435676232',
            'php' => '5.2.4',
          ),
          'schema_version' => '7203',
          'version' => '7.x-2.7',
        ),
        'distro_update' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/distro_update/distro_update.module',
          'basename' => 'distro_update.module',
          'name' => 'distro_update',
          'info' => 
          array (
            'name' => 'Distribution Update Status Manager',
            'description' => 'Provides an alternative Update Manager interface to limit status updates for modules/themes managed by a distribution\'s or module\'s .make file.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'update',
            ),
            'configure' => 'admin/reports/updates/settings',
            'version' => '7.x-1.0-beta4',
            'project' => 'distro_update',
            'datestamp' => '1413825230',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta4',
        ),
        'pm_existing_pages' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/pm_existing_pages/pm_existing_pages.module',
          'basename' => 'pm_existing_pages.module',
          'name' => 'pm_existing_pages',
          'info' => 
          array (
            'name' => 'Page manager existing pages',
            'description' => 'Provides the ability to override existing pages through Page manager.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'page_manager',
            ),
            'package' => 'Chaos tool suite',
            'version' => '7.x-1.4',
            'project' => 'pm_existing_pages',
            'datestamp' => '1337606183',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.4',
        ),
        'features_template' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/features_template/features_template.module',
          'basename' => 'features_template.module',
          'name' => 'features_template',
          'info' => 
          array (
            'name' => 'Features Template',
            'core' => '7.x',
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'panelizer:panelizer:1',
                2 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
            ),
            'version' => '7.x-1.0-beta2',
            'project' => 'features_template',
            'datestamp' => '1421886181',
            'dependencies' => 
            array (
            ),
            'description' => '',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta2',
        ),
        'ultimate_cron' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/ultimate_cron/ultimate_cron.module',
          'basename' => 'ultimate_cron.module',
          'name' => 'ultimate_cron',
          'info' => 
          array (
            'name' => 'Ultimate Cron',
            'description' => 'Cron',
            'core' => '7.x',
            'php' => '5.3',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'tests/rules.test',
              1 => 'CronRule.class.php',
              2 => 'ultimate_cron.lock.inc',
              3 => 'ultimate_cron.memcache-lock.inc',
              4 => 'ultimate_cron.job.inc',
              5 => 'ultimate_cron.plugin.inc',
              6 => 'ultimate_cron.progress.inc',
              7 => 'ultimate_cron.memcache-progress.inc',
              8 => 'ultimate_cron.signal.inc',
              9 => 'ultimate_cron.cache-signal.inc',
            ),
            'configure' => 'admin/config/system/cron/settings',
            'version' => '7.x-2.0-rc1',
            'project' => 'ultimate_cron',
            'datestamp' => '1434547708',
          ),
          'schema_version' => '7202',
          'version' => '7.x-2.0-rc1',
        ),
        'advagg_js_compress' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/advagg/advagg_js_compress/advagg_js_compress.module',
          'basename' => 'advagg_js_compress.module',
          'name' => 'advagg_js_compress',
          'info' => 
          array (
            'name' => 'AdvAgg Compress Javascript',
            'description' => 'Compress Javascript with a 3rd party compressor, JSMin+ currently.',
            'package' => 'Advanced CSS/JS Aggregation',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'advagg',
            ),
            'configure' => 'admin/config/development/performance/advagg/js-compress',
            'version' => '7.x-2.6',
            'project' => 'advagg',
            'datestamp' => '1399084728',
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.6',
        ),
        'advagg_validator' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/advagg/advagg_validator/advagg_validator.module',
          'basename' => 'advagg_validator.module',
          'name' => 'advagg_validator',
          'info' => 
          array (
            'name' => 'AdvAgg CSS/JS Validator',
            'description' => 'Validate the CSS & JS files used in Aggregation for syntax errors.',
            'package' => 'Advanced CSS/JS Aggregation',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'advagg',
            ),
            'configure' => 'admin/config/development/performance/advagg/validator',
            'version' => '7.x-2.6',
            'project' => 'advagg',
            'datestamp' => '1399084728',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.6',
        ),
        'advagg_js_cdn' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/advagg/advagg_js_cdn/advagg_js_cdn.module',
          'basename' => 'advagg_js_cdn.module',
          'name' => 'advagg_js_cdn',
          'info' => 
          array (
            'name' => 'AdvAgg CDN Javascript',
            'description' => 'Use a shared CDN for javascript libraries, Google Libraries API currently.',
            'package' => 'Advanced CSS/JS Aggregation',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'advagg',
            ),
            'version' => '7.x-2.6',
            'project' => 'advagg',
            'datestamp' => '1399084728',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.6',
        ),
        'advagg_mod' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/advagg/advagg_mod/advagg_mod.module',
          'basename' => 'advagg_mod.module',
          'name' => 'advagg_mod',
          'info' => 
          array (
            'name' => 'AdvAgg Modifier',
            'description' => 'Allows one to alter the CSS and JS array.',
            'package' => 'Advanced CSS/JS Aggregation',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'advagg',
            ),
            'configure' => 'admin/config/development/performance/advagg/mod',
            'version' => '7.x-2.6',
            'project' => 'advagg',
            'datestamp' => '1399084728',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.6',
        ),
        'advagg_css_cdn' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/advagg/advagg_css_cdn/advagg_css_cdn.module',
          'basename' => 'advagg_css_cdn.module',
          'name' => 'advagg_css_cdn',
          'info' => 
          array (
            'name' => 'AdvAgg CDN CSS',
            'description' => 'Use a shared CDN for CSS libraries, Google Libraries API currently.',
            'package' => 'Advanced CSS/JS Aggregation',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'advagg',
            ),
            'version' => '7.x-2.6',
            'project' => 'advagg',
            'datestamp' => '1399084728',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.6',
        ),
        'advagg_bundler' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/advagg/advagg_bundler/advagg_bundler.module',
          'basename' => 'advagg_bundler.module',
          'name' => 'advagg_bundler',
          'info' => 
          array (
            'name' => 'AdvAgg Bundler',
            'description' => 'Provides intelligent bundling of CSS and JS files by grouping files that belong together.',
            'package' => 'Advanced CSS/JS Aggregation',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'advagg',
            ),
            'configure' => 'admin/config/development/performance/advagg/bundler',
            'version' => '7.x-2.6',
            'project' => 'advagg',
            'datestamp' => '1399084728',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.6',
        ),
        'advagg_css_compress' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/advagg/advagg_css_compress/advagg_css_compress.module',
          'basename' => 'advagg_css_compress.module',
          'name' => 'advagg_css_compress',
          'info' => 
          array (
            'name' => 'AdvAgg Compress CSS',
            'description' => 'Compress CSS with a 3rd party compressor, YUI currently.',
            'package' => 'Advanced CSS/JS Aggregation',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'advagg',
            ),
            'configure' => 'admin/config/development/performance/advagg/css-compress',
            'version' => '7.x-2.6',
            'project' => 'advagg',
            'datestamp' => '1399084728',
            'php' => '5.2.4',
          ),
          'schema_version' => '7200',
          'version' => '7.x-2.6',
        ),
        'advagg' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/advagg/advagg.module',
          'basename' => 'advagg.module',
          'name' => 'advagg',
          'info' => 
          array (
            'name' => 'Advanced CSS/JS Aggregation',
            'description' => 'Aggregates multiple CSS/JS files in a way that prevents 404 from happening when accessing a CSS or JS file.',
            'package' => 'Advanced CSS/JS Aggregation',
            'core' => '7.x',
            'configure' => 'admin/config/development/performance/advagg',
            'version' => '7.x-2.6',
            'project' => 'advagg',
            'datestamp' => '1399084728',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7205',
          'version' => '7.x-2.6',
        ),
        'backports' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/backports/backports.module',
          'basename' => 'backports.module',
          'name' => 'backports',
          'info' => 
          array (
            'name' => 'Backports',
            'description' => 'UI and other backports from Drupal 8.',
            'core' => '7.x',
            'version' => '7.x-1.0-alpha1',
            'project' => 'backports',
            'datestamp' => '1315886201',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-alpha1',
        ),
        'transliteration' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/transliteration/transliteration.module',
          'basename' => 'transliteration.module',
          'name' => 'transliteration',
          'info' => 
          array (
            'name' => 'Transliteration',
            'description' => 'Converts non-latin text to US-ASCII and sanitizes file names.',
            'core' => '7.x',
            'configure' => 'admin/config/media/file-system',
            'version' => '7.x-3.2',
            'project' => 'transliteration',
            'datestamp' => '1395079444',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7300',
          'version' => '7.x-3.2',
        ),
        'fieldable_panels_panes' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/fieldable_panels_panes/fieldable_panels_panes.module',
          'basename' => 'fieldable_panels_panes.module',
          'name' => 'fieldable_panels_panes',
          'info' => 
          array (
            'name' => 'Fieldable Panels Panes',
            'description' => 'Allow the creation of fieldable panels pane entities.',
            'package' => 'Panels',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools (>= 1.8)',
              1 => 'panels (>= 3.5)',
              2 => 'views',
            ),
            'configure' => 'admin/structure/fieldable-panels-panes',
            'files' => 
            array (
              0 => 'includes/PanelsPaneController.class.php',
              1 => 'includes/translation.handler.fieldable_panels_pane.inc',
              2 => 'includes/fieldable_panels_pane.migrate.inc',
              3 => 'plugins/views/fieldable_panels_panes_handler_argument_bundle.inc',
              4 => 'plugins/views/fieldable_panels_panes_handler_field_bundle.inc',
              5 => 'plugins/views/fieldable_panels_panes_handler_field_delete_entity.inc',
              6 => 'plugins/views/fieldable_panels_panes_handler_field_edit_entity.inc',
              7 => 'plugins/views/fieldable_panels_panes_handler_field_view_entity.inc',
              8 => 'plugins/views/fieldable_panels_panes_handler_filter_bundle.inc',
              9 => 'plugins/views/fieldable_panels_panes_handler_field_delete_revision.inc',
              10 => 'plugins/views/fieldable_panels_panes_handler_field_edit_revision.inc',
              11 => 'plugins/views/fieldable_panels_panes_handler_field_view_revision.inc',
              12 => 'plugins/views/fieldable_panels_panes_handler_field_is_current.inc',
              13 => 'plugins/views/fieldable_panels_panes_handler_field_make_current.inc',
              14 => 'fieldable_panels_panes.info.inc',
              15 => 'includes/FieldablePanelsPaneInlineEntityFormController.class.php',
            ),
            'version' => '7.x-1.7',
            'project' => 'fieldable_panels_panes',
            'datestamp' => '1441216775',
            'php' => '5.2.4',
          ),
          'schema_version' => '7109',
          'version' => '7.x-1.7',
        ),
        'views_export' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/views/views_export/views_export.module',
          'basename' => 'views_export.module',
          'name' => 'views_export',
          'info' => 
          array (
            'dependencies' => 
            array (
            ),
            'description' => '',
            'version' => NULL,
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => NULL,
        ),
        'views_ui' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/views/views_ui.module',
          'basename' => 'views_ui.module',
          'name' => 'views_ui',
          'info' => 
          array (
            'name' => 'Views UI',
            'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
            'package' => 'Views',
            'core' => '7.x',
            'configure' => 'admin/structure/views',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'files' => 
            array (
              0 => 'views_ui.module',
              1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
            ),
            'version' => '7.x-3.11',
            'project' => 'views',
            'datestamp' => '1430321048',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-3.11',
        ),
        'views' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/views/views.module',
          'basename' => 'views.module',
          'name' => 'views',
          'info' => 
          array (
            'name' => 'Views',
            'description' => 'Create customized lists and queries from your database.',
            'package' => 'Views',
            'core' => '7.x',
            'php' => '5.2',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/views.css',
              ),
            ),
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'handlers/views_handler_area.inc',
              1 => 'handlers/views_handler_area_messages.inc',
              2 => 'handlers/views_handler_area_result.inc',
              3 => 'handlers/views_handler_area_text.inc',
              4 => 'handlers/views_handler_area_text_custom.inc',
              5 => 'handlers/views_handler_area_view.inc',
              6 => 'handlers/views_handler_argument.inc',
              7 => 'handlers/views_handler_argument_date.inc',
              8 => 'handlers/views_handler_argument_formula.inc',
              9 => 'handlers/views_handler_argument_many_to_one.inc',
              10 => 'handlers/views_handler_argument_null.inc',
              11 => 'handlers/views_handler_argument_numeric.inc',
              12 => 'handlers/views_handler_argument_string.inc',
              13 => 'handlers/views_handler_argument_group_by_numeric.inc',
              14 => 'handlers/views_handler_field.inc',
              15 => 'handlers/views_handler_field_counter.inc',
              16 => 'handlers/views_handler_field_boolean.inc',
              17 => 'handlers/views_handler_field_contextual_links.inc',
              18 => 'handlers/views_handler_field_custom.inc',
              19 => 'handlers/views_handler_field_date.inc',
              20 => 'handlers/views_handler_field_entity.inc',
              21 => 'handlers/views_handler_field_markup.inc',
              22 => 'handlers/views_handler_field_math.inc',
              23 => 'handlers/views_handler_field_numeric.inc',
              24 => 'handlers/views_handler_field_prerender_list.inc',
              25 => 'handlers/views_handler_field_time_interval.inc',
              26 => 'handlers/views_handler_field_serialized.inc',
              27 => 'handlers/views_handler_field_machine_name.inc',
              28 => 'handlers/views_handler_field_url.inc',
              29 => 'handlers/views_handler_filter.inc',
              30 => 'handlers/views_handler_filter_boolean_operator.inc',
              31 => 'handlers/views_handler_filter_boolean_operator_string.inc',
              32 => 'handlers/views_handler_filter_combine.inc',
              33 => 'handlers/views_handler_filter_date.inc',
              34 => 'handlers/views_handler_filter_equality.inc',
              35 => 'handlers/views_handler_filter_entity_bundle.inc',
              36 => 'handlers/views_handler_filter_group_by_numeric.inc',
              37 => 'handlers/views_handler_filter_in_operator.inc',
              38 => 'handlers/views_handler_filter_many_to_one.inc',
              39 => 'handlers/views_handler_filter_numeric.inc',
              40 => 'handlers/views_handler_filter_string.inc',
              41 => 'handlers/views_handler_filter_fields_compare.inc',
              42 => 'handlers/views_handler_relationship.inc',
              43 => 'handlers/views_handler_relationship_groupwise_max.inc',
              44 => 'handlers/views_handler_sort.inc',
              45 => 'handlers/views_handler_sort_date.inc',
              46 => 'handlers/views_handler_sort_formula.inc',
              47 => 'handlers/views_handler_sort_group_by_numeric.inc',
              48 => 'handlers/views_handler_sort_menu_hierarchy.inc',
              49 => 'handlers/views_handler_sort_random.inc',
              50 => 'includes/base.inc',
              51 => 'includes/handlers.inc',
              52 => 'includes/plugins.inc',
              53 => 'includes/view.inc',
              54 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
              55 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
              56 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
              57 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
              58 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
              59 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
              60 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
              61 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
              62 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
              63 => 'modules/book/views_plugin_argument_default_book_root.inc',
              64 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
              65 => 'modules/comment/views_handler_field_comment.inc',
              66 => 'modules/comment/views_handler_field_comment_depth.inc',
              67 => 'modules/comment/views_handler_field_comment_link.inc',
              68 => 'modules/comment/views_handler_field_comment_link_approve.inc',
              69 => 'modules/comment/views_handler_field_comment_link_delete.inc',
              70 => 'modules/comment/views_handler_field_comment_link_edit.inc',
              71 => 'modules/comment/views_handler_field_comment_link_reply.inc',
              72 => 'modules/comment/views_handler_field_comment_node_link.inc',
              73 => 'modules/comment/views_handler_field_comment_username.inc',
              74 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
              75 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
              76 => 'modules/comment/views_handler_field_node_comment.inc',
              77 => 'modules/comment/views_handler_field_node_new_comments.inc',
              78 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
              79 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
              80 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
              81 => 'modules/comment/views_handler_filter_node_comment.inc',
              82 => 'modules/comment/views_handler_sort_comment_thread.inc',
              83 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
              84 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
              85 => 'modules/comment/views_plugin_row_comment_rss.inc',
              86 => 'modules/comment/views_plugin_row_comment_view.inc',
              87 => 'modules/contact/views_handler_field_contact_link.inc',
              88 => 'modules/field/views_handler_field_field.inc',
              89 => 'modules/field/views_handler_relationship_entity_reverse.inc',
              90 => 'modules/field/views_handler_argument_field_list.inc',
              91 => 'modules/field/views_handler_filter_field_list_boolean.inc',
              92 => 'modules/field/views_handler_argument_field_list_string.inc',
              93 => 'modules/field/views_handler_filter_field_list.inc',
              94 => 'modules/filter/views_handler_field_filter_format_name.inc',
              95 => 'modules/locale/views_handler_field_node_language.inc',
              96 => 'modules/locale/views_handler_filter_node_language.inc',
              97 => 'modules/locale/views_handler_argument_locale_group.inc',
              98 => 'modules/locale/views_handler_argument_locale_language.inc',
              99 => 'modules/locale/views_handler_field_locale_group.inc',
              100 => 'modules/locale/views_handler_field_locale_language.inc',
              101 => 'modules/locale/views_handler_field_locale_link_edit.inc',
              102 => 'modules/locale/views_handler_filter_locale_group.inc',
              103 => 'modules/locale/views_handler_filter_locale_language.inc',
              104 => 'modules/locale/views_handler_filter_locale_version.inc',
              105 => 'modules/node/views_handler_argument_dates_various.inc',
              106 => 'modules/node/views_handler_argument_node_language.inc',
              107 => 'modules/node/views_handler_argument_node_nid.inc',
              108 => 'modules/node/views_handler_argument_node_type.inc',
              109 => 'modules/node/views_handler_argument_node_vid.inc',
              110 => 'modules/node/views_handler_argument_node_uid_revision.inc',
              111 => 'modules/node/views_handler_field_history_user_timestamp.inc',
              112 => 'modules/node/views_handler_field_node.inc',
              113 => 'modules/node/views_handler_field_node_link.inc',
              114 => 'modules/node/views_handler_field_node_link_delete.inc',
              115 => 'modules/node/views_handler_field_node_link_edit.inc',
              116 => 'modules/node/views_handler_field_node_revision.inc',
              117 => 'modules/node/views_handler_field_node_revision_link.inc',
              118 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
              119 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
              120 => 'modules/node/views_handler_field_node_path.inc',
              121 => 'modules/node/views_handler_field_node_type.inc',
              122 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
              123 => 'modules/node/views_handler_filter_node_access.inc',
              124 => 'modules/node/views_handler_filter_node_status.inc',
              125 => 'modules/node/views_handler_filter_node_type.inc',
              126 => 'modules/node/views_handler_filter_node_uid_revision.inc',
              127 => 'modules/node/views_plugin_argument_default_node.inc',
              128 => 'modules/node/views_plugin_argument_validate_node.inc',
              129 => 'modules/node/views_plugin_row_node_rss.inc',
              130 => 'modules/node/views_plugin_row_node_view.inc',
              131 => 'modules/profile/views_handler_field_profile_date.inc',
              132 => 'modules/profile/views_handler_field_profile_list.inc',
              133 => 'modules/profile/views_handler_filter_profile_selection.inc',
              134 => 'modules/search/views_handler_argument_search.inc',
              135 => 'modules/search/views_handler_field_search_score.inc',
              136 => 'modules/search/views_handler_filter_search.inc',
              137 => 'modules/search/views_handler_sort_search_score.inc',
              138 => 'modules/search/views_plugin_row_search_view.inc',
              139 => 'modules/statistics/views_handler_field_accesslog_path.inc',
              140 => 'modules/system/views_handler_argument_file_fid.inc',
              141 => 'modules/system/views_handler_field_file.inc',
              142 => 'modules/system/views_handler_field_file_extension.inc',
              143 => 'modules/system/views_handler_field_file_filemime.inc',
              144 => 'modules/system/views_handler_field_file_uri.inc',
              145 => 'modules/system/views_handler_field_file_status.inc',
              146 => 'modules/system/views_handler_filter_file_status.inc',
              147 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
              148 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
              149 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
              150 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
              151 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
              152 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
              153 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
              154 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
              155 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
              156 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
              157 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
              158 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
              159 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
              160 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
              161 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
              162 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
              163 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
              164 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
              165 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
              166 => 'modules/system/views_handler_filter_system_type.inc',
              167 => 'modules/translation/views_handler_argument_node_tnid.inc',
              168 => 'modules/translation/views_handler_field_node_link_translate.inc',
              169 => 'modules/translation/views_handler_field_node_translation_link.inc',
              170 => 'modules/translation/views_handler_filter_node_tnid.inc',
              171 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
              172 => 'modules/translation/views_handler_relationship_translation.inc',
              173 => 'modules/user/views_handler_argument_user_uid.inc',
              174 => 'modules/user/views_handler_argument_users_roles_rid.inc',
              175 => 'modules/user/views_handler_field_user.inc',
              176 => 'modules/user/views_handler_field_user_language.inc',
              177 => 'modules/user/views_handler_field_user_link.inc',
              178 => 'modules/user/views_handler_field_user_link_cancel.inc',
              179 => 'modules/user/views_handler_field_user_link_edit.inc',
              180 => 'modules/user/views_handler_field_user_mail.inc',
              181 => 'modules/user/views_handler_field_user_name.inc',
              182 => 'modules/user/views_handler_field_user_permissions.inc',
              183 => 'modules/user/views_handler_field_user_picture.inc',
              184 => 'modules/user/views_handler_field_user_roles.inc',
              185 => 'modules/user/views_handler_filter_user_current.inc',
              186 => 'modules/user/views_handler_filter_user_name.inc',
              187 => 'modules/user/views_handler_filter_user_permissions.inc',
              188 => 'modules/user/views_handler_filter_user_roles.inc',
              189 => 'modules/user/views_plugin_argument_default_current_user.inc',
              190 => 'modules/user/views_plugin_argument_default_user.inc',
              191 => 'modules/user/views_plugin_argument_validate_user.inc',
              192 => 'modules/user/views_plugin_row_user_view.inc',
              193 => 'plugins/views_plugin_access.inc',
              194 => 'plugins/views_plugin_access_none.inc',
              195 => 'plugins/views_plugin_access_perm.inc',
              196 => 'plugins/views_plugin_access_role.inc',
              197 => 'plugins/views_plugin_argument_default.inc',
              198 => 'plugins/views_plugin_argument_default_php.inc',
              199 => 'plugins/views_plugin_argument_default_fixed.inc',
              200 => 'plugins/views_plugin_argument_default_raw.inc',
              201 => 'plugins/views_plugin_argument_validate.inc',
              202 => 'plugins/views_plugin_argument_validate_numeric.inc',
              203 => 'plugins/views_plugin_argument_validate_php.inc',
              204 => 'plugins/views_plugin_cache.inc',
              205 => 'plugins/views_plugin_cache_none.inc',
              206 => 'plugins/views_plugin_cache_time.inc',
              207 => 'plugins/views_plugin_display.inc',
              208 => 'plugins/views_plugin_display_attachment.inc',
              209 => 'plugins/views_plugin_display_block.inc',
              210 => 'plugins/views_plugin_display_default.inc',
              211 => 'plugins/views_plugin_display_embed.inc',
              212 => 'plugins/views_plugin_display_extender.inc',
              213 => 'plugins/views_plugin_display_feed.inc',
              214 => 'plugins/views_plugin_display_page.inc',
              215 => 'plugins/views_plugin_exposed_form_basic.inc',
              216 => 'plugins/views_plugin_exposed_form.inc',
              217 => 'plugins/views_plugin_exposed_form_input_required.inc',
              218 => 'plugins/views_plugin_localization_core.inc',
              219 => 'plugins/views_plugin_localization.inc',
              220 => 'plugins/views_plugin_localization_none.inc',
              221 => 'plugins/views_plugin_pager.inc',
              222 => 'plugins/views_plugin_pager_full.inc',
              223 => 'plugins/views_plugin_pager_mini.inc',
              224 => 'plugins/views_plugin_pager_none.inc',
              225 => 'plugins/views_plugin_pager_some.inc',
              226 => 'plugins/views_plugin_query.inc',
              227 => 'plugins/views_plugin_query_default.inc',
              228 => 'plugins/views_plugin_row.inc',
              229 => 'plugins/views_plugin_row_fields.inc',
              230 => 'plugins/views_plugin_row_rss_fields.inc',
              231 => 'plugins/views_plugin_style.inc',
              232 => 'plugins/views_plugin_style_default.inc',
              233 => 'plugins/views_plugin_style_grid.inc',
              234 => 'plugins/views_plugin_style_list.inc',
              235 => 'plugins/views_plugin_style_jump_menu.inc',
              236 => 'plugins/views_plugin_style_mapping.inc',
              237 => 'plugins/views_plugin_style_rss.inc',
              238 => 'plugins/views_plugin_style_summary.inc',
              239 => 'plugins/views_plugin_style_summary_jump_menu.inc',
              240 => 'plugins/views_plugin_style_summary_unformatted.inc',
              241 => 'plugins/views_plugin_style_table.inc',
              242 => 'tests/handlers/views_handlers.test',
              243 => 'tests/handlers/views_handler_area_text.test',
              244 => 'tests/handlers/views_handler_argument_null.test',
              245 => 'tests/handlers/views_handler_argument_string.test',
              246 => 'tests/handlers/views_handler_field.test',
              247 => 'tests/handlers/views_handler_field_boolean.test',
              248 => 'tests/handlers/views_handler_field_custom.test',
              249 => 'tests/handlers/views_handler_field_counter.test',
              250 => 'tests/handlers/views_handler_field_date.test',
              251 => 'tests/handlers/views_handler_field_file_extension.test',
              252 => 'tests/handlers/views_handler_field_file_size.test',
              253 => 'tests/handlers/views_handler_field_math.test',
              254 => 'tests/handlers/views_handler_field_url.test',
              255 => 'tests/handlers/views_handler_field_xss.test',
              256 => 'tests/handlers/views_handler_filter_combine.test',
              257 => 'tests/handlers/views_handler_filter_date.test',
              258 => 'tests/handlers/views_handler_filter_equality.test',
              259 => 'tests/handlers/views_handler_filter_in_operator.test',
              260 => 'tests/handlers/views_handler_filter_numeric.test',
              261 => 'tests/handlers/views_handler_filter_string.test',
              262 => 'tests/handlers/views_handler_sort_random.test',
              263 => 'tests/handlers/views_handler_sort_date.test',
              264 => 'tests/handlers/views_handler_sort.test',
              265 => 'tests/test_handlers/views_test_area_access.inc',
              266 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
              267 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
              268 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
              269 => 'tests/plugins/views_plugin_display.test',
              270 => 'tests/styles/views_plugin_style_jump_menu.test',
              271 => 'tests/styles/views_plugin_style.test',
              272 => 'tests/styles/views_plugin_style_base.test',
              273 => 'tests/styles/views_plugin_style_mapping.test',
              274 => 'tests/styles/views_plugin_style_unformatted.test',
              275 => 'tests/views_access.test',
              276 => 'tests/views_analyze.test',
              277 => 'tests/views_basic.test',
              278 => 'tests/views_argument_default.test',
              279 => 'tests/views_argument_validator.test',
              280 => 'tests/views_exposed_form.test',
              281 => 'tests/field/views_fieldapi.test',
              282 => 'tests/views_glossary.test',
              283 => 'tests/views_groupby.test',
              284 => 'tests/views_handlers.test',
              285 => 'tests/views_module.test',
              286 => 'tests/views_pager.test',
              287 => 'tests/views_plugin_localization_test.inc',
              288 => 'tests/views_translatable.test',
              289 => 'tests/views_query.test',
              290 => 'tests/views_upgrade.test',
              291 => 'tests/views_test.views_default.inc',
              292 => 'tests/comment/views_handler_argument_comment_user_uid.test',
              293 => 'tests/comment/views_handler_filter_comment_user_uid.test',
              294 => 'tests/node/views_node_revision_relations.test',
              295 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
              296 => 'tests/user/views_handler_field_user_name.test',
              297 => 'tests/user/views_user_argument_default.test',
              298 => 'tests/user/views_user_argument_validate.test',
              299 => 'tests/user/views_user.test',
              300 => 'tests/views_cache.test',
              301 => 'tests/views_view.test',
              302 => 'tests/views_ui.test',
            ),
            'version' => '7.x-3.11',
            'project' => 'views',
            'datestamp' => '1430321048',
          ),
          'schema_version' => '7301',
          'version' => '7.x-3.11',
        ),
        'geophp' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/geophp/geophp.module',
          'basename' => 'geophp.module',
          'name' => 'geophp',
          'info' => 
          array (
            'name' => 'geoPHP',
            'description' => 'Wraps the geoPHP library: advanced geometry operations in PHP',
            'core' => '7.x',
            'version' => '7.x-1.7',
            'project' => 'geophp',
            'datestamp' => '1352084822',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.7',
        ),
        'defaultcontent' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/defaultcontent/defaultcontent.module',
          'basename' => 'defaultcontent.module',
          'name' => 'defaultcontent',
          'info' => 
          array (
            'name' => 'Default Content',
            'description' => 'Allows import/export of default content.',
            'core' => '7.x',
            'package' => 'Features',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'ctools',
              2 => 'menu',
            ),
            'version' => '7.x-1.0-alpha9',
            'project' => 'defaultcontent',
            'datestamp' => '1359180370',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-alpha9',
        ),
        'wysiwyg_filter' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/wysiwyg_filter/wysiwyg_filter.module',
          'basename' => 'wysiwyg_filter.module',
          'name' => 'wysiwyg_filter',
          'info' => 
          array (
            'name' => 'WYSIWYG Filter',
            'description' => 'Provides an input filter that allows site administrators configure which HTML elements, attributes and style properties are allowed.',
            'package' => 'Input filters',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'wysiwyg_filter.admin.inc',
              1 => 'wysiwyg_filter.inc',
              2 => 'wysiwyg_filter.install',
              3 => 'wysiwyg_filter.module',
              4 => 'wysiwyg_filter.pages.inc',
            ),
            'version' => '7.x-1.6-rc2',
            'project' => 'wysiwyg_filter',
            'datestamp' => '1310326321',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.6-rc2',
        ),
        'inline_entity_form' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/inline_entity_form/inline_entity_form.module',
          'basename' => 'inline_entity_form.module',
          'name' => 'inline_entity_form',
          'info' => 
          array (
            'name' => 'Inline Entity Form',
            'description' => 'Provides a widget for inline management (creation, modification, removal) of referenced entities. ',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'entity',
              1 => 'system (>7.14)',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/entity.inline_entity_form.inc',
              1 => 'includes/node.inline_entity_form.inc',
              2 => 'includes/taxonomy_term.inline_entity_form.inc',
              3 => 'includes/commerce_product.inline_entity_form.inc',
              4 => 'includes/commerce_line_item.inline_entity_form.inc',
            ),
            'version' => '7.x-1.6',
            'project' => 'inline_entity_form',
            'datestamp' => '1434553381',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.6',
        ),
        'fullcalendar_create' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/fullcalendar_create/fullcalendar_create.module',
          'basename' => 'fullcalendar_create.module',
          'name' => 'fullcalendar_create',
          'info' => 
          array (
            'name' => 'FullCalendar Create',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'fullcalendar',
            ),
            'package' => 'FullCalendar',
            'version' => '7.x-1.0-alpha1',
            'project' => 'fullcalendar_create',
            'datestamp' => '1440701345',
            'description' => '',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-alpha1',
        ),
        'link' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/link/link.module',
          'basename' => 'link.module',
          'name' => 'link',
          'info' => 
          array (
            'name' => 'Link',
            'description' => 'Defines simple link field types.',
            'core' => '7.x',
            'package' => 'Fields',
            'files' => 
            array (
              0 => 'link.module',
              1 => 'link.migrate.inc',
              2 => 'tests/link.test',
              3 => 'tests/link.attribute.test',
              4 => 'tests/link.crud.test',
              5 => 'tests/link.crud_browser.test',
              6 => 'tests/link.token.test',
              7 => 'tests/link.validate.test',
              8 => 'views/link_views_handler_argument_target.inc',
              9 => 'views/link_views_handler_filter_protocol.inc',
            ),
            'version' => '7.x-1.3',
            'project' => 'link',
            'datestamp' => '1413924830',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.3',
        ),
        'simple_gmap' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/simple_gmap/simple_gmap.module',
          'basename' => 'simple_gmap.module',
          'name' => 'simple_gmap',
          'info' => 
          array (
            'name' => 'Simple Google Maps',
            'description' => 'Provides a Google Maps link/map formatter for simple Text fields',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'simple_gmap.module',
            ),
            'version' => '7.x-1.2',
            'project' => 'simple_gmap',
            'datestamp' => '1388781572',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.2',
        ),
        'module_filter' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/module_filter/module_filter.module',
          'basename' => 'module_filter.module',
          'name' => 'module_filter',
          'info' => 
          array (
            'name' => 'Module filter',
            'description' => 'Filter the modules list.',
            'core' => '7.x',
            'package' => 'Administration',
            'files' => 
            array (
              0 => 'module_filter.install',
              1 => 'module_filter.js',
              2 => 'module_filter.module',
              3 => 'module_filter.admin.inc',
              4 => 'module_filter.theme.inc',
              5 => 'css/module_filter.css',
              6 => 'css/module_filter_tab.css',
              7 => 'js/module_filter.js',
              8 => 'js/module_filter_tab.js',
            ),
            'configure' => 'admin/config/user-interface/modulefilter',
            'version' => '7.x-2.0',
            'project' => 'module_filter',
            'datestamp' => '1424631189',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.0',
        ),
        'manualcrop' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/manualcrop/manualcrop.module',
          'basename' => 'manualcrop.module',
          'name' => 'manualcrop',
          'info' => 
          array (
            'name' => 'Manual Crop',
            'description' => 'Lets you manually crop an image based upon the image style effects.',
            'package' => 'Image',
            'core' => '7.x',
            'configure' => 'admin/config/media/manualcrop',
            'dependencies' => 
            array (
              0 => 'image (>=7.8)',
              1 => 'libraries (>=2.1)',
            ),
            'files' => 
            array (
              0 => 'includes/views/manualcrop.views.inc',
            ),
            'version' => '7.x-1.5+4-dev',
            'project' => 'manualcrop',
            'datestamp' => '1447964430',
            'php' => '5.2.4',
          ),
          'schema_version' => '7108',
          'version' => '7.x-1.5+4-dev',
        ),
        'devel_generate' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/devel/devel_generate/devel_generate.module',
          'basename' => 'devel_generate.module',
          'name' => 'devel_generate',
          'info' => 
          array (
            'name' => 'Devel generate',
            'description' => 'Generate dummy users, nodes, and taxonomy terms.',
            'package' => 'Development',
            'core' => '7.x',
            'tags' => 
            array (
              0 => 'developer',
            ),
            'configure' => 'admin/config/development/generate',
            'files' => 
            array (
              0 => 'devel_generate.test',
            ),
            'version' => '7.x-1.5+14-dev',
            'project' => 'devel',
            'datestamp' => '1447964451',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.5+14-dev',
        ),
        'devel' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/devel/devel.module',
          'basename' => 'devel.module',
          'name' => 'devel',
          'info' => 
          array (
            'name' => 'Devel',
            'description' => 'Various blocks, pages, and functions for developers.',
            'package' => 'Development',
            'core' => '7.x',
            'configure' => 'admin/config/development/devel',
            'tags' => 
            array (
              0 => 'developer',
            ),
            'files' => 
            array (
              0 => 'devel.test',
              1 => 'devel.mail.inc',
            ),
            'version' => '7.x-1.5+14-dev',
            'project' => 'devel',
            'datestamp' => '1447964451',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7007',
          'version' => '7.x-1.5+14-dev',
        ),
        'devel_node_access' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/devel/devel_node_access.module',
          'basename' => 'devel_node_access.module',
          'name' => 'devel_node_access',
          'info' => 
          array (
            'name' => 'Devel node access',
            'description' => 'Developer blocks and page illustrating relevant node_access records.',
            'package' => 'Development',
            'dependencies' => 
            array (
              0 => 'menu',
            ),
            'core' => '7.x',
            'configure' => 'admin/config/development/devel',
            'tags' => 
            array (
              0 => 'developer',
            ),
            'version' => '7.x-1.5+14-dev',
            'project' => 'devel',
            'datestamp' => '1447964451',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.5+14-dev',
        ),
        'feeds_comment_processor' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/feeds_comment_processor/feeds_comment_processor.module',
          'basename' => 'feeds_comment_processor.module',
          'name' => 'feeds_comment_processor',
          'info' => 
          array (
            'name' => 'Feeds Comment Processor',
            'description' => 'Create and update comments from parsed content.',
            'package' => 'Feeds',
            'dependencies' => 
            array (
              0 => 'feeds',
              1 => 'comment',
            ),
            'core' => '7.x',
            'version' => '7.x-1.0',
            'project' => 'feeds_comment_processor',
            'datestamp' => '1436625540',
            'php' => '5.2.4',
          ),
          'schema_version' => '7104',
          'version' => '7.x-1.0',
        ),
        'geofield_map' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/geofield/modules/geofield_map/geofield_map.module',
          'basename' => 'geofield_map.module',
          'name' => 'geofield_map',
          'info' => 
          array (
            'name' => 'Geofield Map',
            'description' => 'Provides a basic mapping interface for Geofields.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'geofield',
            ),
            'files' => 
            array (
              0 => 'includes/geofield_map.views.inc',
              1 => 'includes/geofield_map_plugin_style_map.inc',
            ),
            'version' => '7.x-2.3',
            'project' => 'geofield',
            'datestamp' => '1411337638',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.3',
        ),
        'geofield' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/geofield/geofield.module',
          'basename' => 'geofield.module',
          'name' => 'geofield',
          'info' => 
          array (
            'name' => 'Geofield',
            'description' => 'Stores geographic and location data (points, lines, and polygons).',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'geophp (>=1.7)',
              1 => 'ctools',
            ),
            'package' => 'Fields',
            'files' => 
            array (
              0 => 'geofield.module',
              1 => 'geofield.install',
              2 => 'geofield.elements.inc',
              3 => 'geofield.widgets.inc',
              4 => 'geofield.formatters.inc',
              5 => 'geofield.openlayers.inc',
              6 => 'geofield.feeds.inc',
              7 => 'tests/geofield.test',
              8 => 'views/geofield.views.inc',
              9 => 'views/handlers/geofield_handler_sort.inc',
              10 => 'views/handlers/geofield_handler_field.inc',
              11 => 'views/handlers/geofield_handler_filter.inc',
              12 => 'views/handlers/geofield_handler_argument_proximity.inc',
              13 => 'views/proximity_plugins/geofieldProximityBase.inc',
              14 => 'views/proximity_plugins/geofieldProximityManual.inc',
              15 => 'views/proximity_plugins/geofieldProximityGeocoder.inc',
              16 => 'views/proximity_plugins/geofieldProximityEntityURL.inc',
              17 => 'views/proximity_plugins/geofieldProximityOtherGeofield.inc',
              18 => 'views/proximity_plugins/geofieldProximityCurrentUser.inc',
              19 => 'views/proximity_plugins/geofieldProximityExposedFilter.inc',
              20 => 'views/proximity_plugins/geofieldProximityContextualFilter.inc',
            ),
            'version' => '7.x-2.3',
            'project' => 'geofield',
            'datestamp' => '1411337638',
            'php' => '5.2.4',
          ),
          'schema_version' => '7202',
          'version' => '7.x-2.3',
        ),
        'realname' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/realname/realname.module',
          'basename' => 'realname.module',
          'name' => 'realname',
          'info' => 
          array (
            'name' => 'Real name',
            'description' => 'Provides token-based name displays for users.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'token',
            ),
            'files' => 
            array (
              0 => 'realname.module',
              1 => 'realname.admin.inc',
              2 => 'realname.pages.inc',
              3 => 'realname.tokens.inc',
              4 => 'realname.test',
              5 => 'realname.install',
            ),
            'configure' => 'admin/config/people/realname',
            'version' => '7.x-1.2',
            'project' => 'realname',
            'datestamp' => '1393160306',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-1.2',
        ),
        'search_api_solr' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/search_api_solr/search_api_solr.module',
          'basename' => 'search_api_solr.module',
          'name' => 'search_api_solr',
          'info' => 
          array (
            'name' => 'Solr search',
            'description' => 'Offers an implementation of the Search API that uses an Apache Solr server for indexing content.',
            'dependencies' => 
            array (
              0 => 'search_api',
            ),
            'core' => '7.x',
            'package' => 'Search',
            'files' => 
            array (
              0 => 'includes/document.inc',
              1 => 'includes/service.inc',
              2 => 'includes/solr_connection.inc',
              3 => 'includes/solr_connection.interface.inc',
              4 => 'includes/solr_field.inc',
              5 => 'includes/spellcheck.inc',
            ),
            'version' => '7.x-1.8',
            'project' => 'search_api_solr',
            'datestamp' => '1434376081',
            'php' => '5.2.4',
          ),
          'schema_version' => '7102',
          'version' => '7.x-1.8',
        ),
        'save_draft' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/save_draft/save_draft.module',
          'basename' => 'save_draft.module',
          'name' => 'save_draft',
          'info' => 
          array (
            'name' => 'Save Draft',
            'description' => 'Adds a \'Save as Draft\' button to content types',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'save_draft.module',
              1 => 'save_draft.test',
            ),
            'version' => '7.x-1.4',
            'project' => 'save_draft',
            'datestamp' => '1303860116',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.4',
        ),
        'bootstrap_tour' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/bootstrap_tour/bootstrap_tour.module',
          'basename' => 'bootstrap_tour.module',
          'name' => 'bootstrap_tour',
          'info' => 
          array (
            'name' => 'Bootstrap Tour',
            'description' => 'Guided site tours powered by the Bootstrap Tours JS/CSS library',
            'core' => '7.x',
            'package' => 'Bootstrap',
            'dependencies' => 
            array (
              0 => 'jquery_update',
              1 => 'ctools',
              2 => 'entity',
              3 => 'entityreference',
              4 => 'inline_entity_form',
            ),
            'files' => 
            array (
              0 => 'includes/bootstrap_tour.controller.inc',
            ),
            'version' => '7.x-2.4',
            'project' => 'bootstrap_tour',
            'datestamp' => '1436367564',
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.4',
        ),
        'reference_option_limit' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/reference_option_limit/reference_option_limit.module',
          'basename' => 'reference_option_limit.module',
          'name' => 'reference_option_limit',
          'info' => 
          array (
            'name' => 'Reference option limit',
            'description' => 'Allows reference fields to have their available options limited by the values of other fields in the current entity.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'options',
            ),
            'files' => 
            array (
              0 => 'reference_option_limit.module',
              1 => 'reference_option_limit.views.inc',
              2 => 'reference_option_limit_handler_filter_limited_options_term_reference.inc',
            ),
            'version' => '7.x-1.4+1-dev',
            'project' => 'reference_option_limit',
            'datestamp' => '1447964462',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.4+1-dev',
        ),
        'oa_widgets' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_widgets/oa_widgets.module',
          'basename' => 'oa_widgets.module',
          'name' => 'oa_widgets',
          'info' => 
          array (
            'name' => 'Open Atrium Widgets',
            'description' => 'A collection of widgets for Open Atrium',
            'core' => '7.x',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'oa_widgets.css',
              ),
            ),
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'oa_core',
              2 => 'oa_sections',
            ),
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.65',
        ),
        'oa_river' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_river/oa_river.module',
          'basename' => 'oa_river.module',
          'name' => 'oa_river',
          'info' => 
          array (
            'name' => 'Open Atrium Recent Activity',
            'description' => 'Displays a consolidated list of recent activities across all applications.',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'entity_token',
              1 => 'oa_core',
              2 => 'panels',
              3 => 'views',
              4 => 'views_content',
              5 => 'views_load_more',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'oa_river.css',
              ),
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'views_view' => 
              array (
                0 => 'oa_recent_activity',
              ),
            ),
            'features_exclude' => 
            array (
              'dependencies' => 
              array (
                'ctools' => 'ctools',
              ),
            ),
            'project path' => 'sites/all/modules/contrib/oa_core/modules',
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.65',
        ),
        'oa_config' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_config/oa_config.module',
          'basename' => 'oa_config.module',
          'name' => 'oa_config',
          'info' => 
          array (
            'name' => 'Open Atrium Config',
            'description' => 'System configuration variables',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'chosen',
              1 => 'ctools',
              2 => 'panopoly_wysiwyg',
              3 => 'strongarm',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'variable' => 
              array (
                0 => 'advagg_core_groups',
                1 => 'advagg_ie_css_selector_limiter',
                2 => 'advagg_ie_css_selector_limiter_value',
                3 => 'apps_grouping_mode',
                4 => 'apps_grouping_vertical',
                5 => 'bootstrap_library_settings',
                6 => 'chosen_jquery_selector',
                7 => 'chosen_minimum',
                8 => 'chosen_minimum_multiple',
                9 => 'chosen_minimum_single',
                10 => 'features_rebuild_on_flush',
                11 => 'file_default_scheme',
                12 => 'file_entity_file_upload_wizard_skip_scheme',
                13 => 'og_context_negotiation_group_context',
                14 => 'og_context_providers_weight_group_context',
                15 => 'panopoly_core_breadcrumb_title',
                16 => 'pathauto_reduce_ascii',
                17 => 'preprocess_css',
                18 => 'select2_delay',
              ),
            ),
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.65',
        ),
        'oa_adminrole' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_adminrole/oa_adminrole.module',
          'basename' => 'oa_adminrole.module',
          'name' => 'oa_adminrole',
          'info' => 
          array (
            'name' => 'Open Atrium Admin Role',
            'description' => 'Automatically assign all node-based permissions to an admin role.',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'oa_core',
            ),
            'project path' => 'sites/all/modules/contrib/oa_core/modules',
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.65',
        ),
        'oa_users' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_users/oa_users.module',
          'basename' => 'oa_users.module',
          'name' => 'oa_users',
          'info' => 
          array (
            'name' => 'Open Atrium Users',
            'description' => 'User layouts',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'entityreference',
              2 => 'features',
              3 => 'image',
              4 => 'og',
              5 => 'og_ui',
              6 => 'page_manager',
              7 => 'realname',
              8 => 'strongarm',
              9 => 'text',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_user_display_name',
                1 => 'og_user_node',
              ),
              'field_instance' => 
              array (
                0 => 'user-user-field_user_display_name',
                1 => 'user-user-og_user_node',
              ),
              'page_manager_pages' => 
              array (
                0 => 'user_actitivy',
              ),
              'variable' => 
              array (
                0 => 'realname_pattern',
                1 => 'user_picture_style',
              ),
            ),
            'features_exclude' => 
            array (
              'field_base' => 
              array (
                'field_user_about' => 'field_user_about',
                'field_user_picture' => 'field_user_picture',
              ),
            ),
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-2.65',
        ),
        'oa_date' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_date/oa_date.module',
          'basename' => 'oa_date.module',
          'name' => 'oa_date',
          'info' => 
          array (
            'core' => '7.x',
            'name' => 'Open Atrium date',
            'description' => 'Adds a custom relative date format for Open Atrium',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'date_api',
              1 => 'views',
            ),
            'files' => 
            array (
              0 => 'views/oa_date_handler_field_date.inc',
            ),
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.65',
        ),
        'oa_buttons' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_buttons/oa_buttons.module',
          'basename' => 'oa_buttons.module',
          'name' => 'oa_buttons',
          'info' => 
          array (
            'name' => 'Open Atrium Buttons',
            'description' => 'Provide command button customizations for Open Atrium',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'command_buttons',
              1 => 'conditional_fields',
              2 => 'ctools',
              3 => 'features',
              4 => 'list',
              5 => 'oa_core',
              6 => 'oa_section_context',
              7 => 'oa_sections',
              8 => 'options',
              9 => 'taxonomy',
            ),
            'features' => 
            array (
              'conditional_fields' => 
              array (
                0 => 'node:oa_section',
                1 => 'node:oa_space',
              ),
              'ctools' => 
              array (
                0 => 'field_group:field_group:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_oa_node_types',
              ),
              'field_instance' => 
              array (
                0 => 'node-oa_section-field_oa_node_types',
                1 => 'node-oa_space-field_oa_node_types',
                2 => 'taxonomy_term-section_type-field_oa_node_types',
                3 => 'taxonomy_term-space_type-field_oa_node_types',
              ),
            ),
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => '7010',
          'version' => '7.x-2.65',
        ),
        'oa_wysiwyg' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_wysiwyg/oa_wysiwyg.module',
          'basename' => 'oa_wysiwyg.module',
          'name' => 'oa_wysiwyg',
          'info' => 
          array (
            'name' => 'Open Atrium WYSIWYG',
            'description' => 'WYSIWYG configuration variables',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'features_override',
              1 => 'panopoly_wysiwyg',
            ),
            'features' => 
            array (
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'features_override_items' => 
              array (
                0 => 'filter.panopoly_wysiwyg_text',
                1 => 'wysiwyg.panopoly_wysiwyg_text',
              ),
              'features_overrides' => 
              array (
                0 => 'filter.panopoly_wysiwyg_text.filters|wysiwyg|settings|style_border-1|border',
                1 => 'filter.panopoly_wysiwyg_text.filters|wysiwyg|settings|style_border-2|border-color',
                2 => 'filter.panopoly_wysiwyg_text.filters|wysiwyg|settings|style_border-2|border-style',
                3 => 'filter.panopoly_wysiwyg_text.filters|wysiwyg|settings|style_color|background-color',
                4 => 'filter.panopoly_wysiwyg_text.filters|wysiwyg|settings|style_list|list-style-type',
                5 => 'filter.panopoly_wysiwyg_text.filters|wysiwyg|settings|valid_elements',
                6 => 'wysiwyg.panopoly_wysiwyg_text.settings|buttons|advlist',
                7 => 'wysiwyg.panopoly_wysiwyg_text.settings|buttons|table',
              ),
            ),
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.65',
        ),
        'oa_access' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_access/oa_access.module',
          'basename' => 'oa_access.module',
          'name' => 'oa_access',
          'info' => 
          array (
            'name' => 'Open Atrium Access',
            'description' => 'Access control API based on Open Atrium Groups and Teams.',
            'package' => 'Open Atrium',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'tests/oa_access.test',
            ),
            'dependencies' => 
            array (
              0 => 'og_ui',
              1 => 'oa_core',
            ),
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-2.65',
        ),
        'oa_diff' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_diff/oa_diff.module',
          'basename' => 'oa_diff.module',
          'name' => 'oa_diff',
          'info' => 
          array (
            'name' => 'Open Atrium Diff',
            'description' => 'Provides Diff tokens for notification messages.',
            'package' => 'Open Atrium',
            'core' => '7.x',
            'php' => '5.1',
            'dependencies' => 
            array (
              0 => 'token',
              1 => 'diff',
            ),
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.65',
        ),
        'oa_layouts' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_layouts/oa_layouts.module',
          'basename' => 'oa_layouts.module',
          'name' => 'oa_layouts',
          'info' => 
          array (
            'name' => 'Open Atrium Layouts',
            'description' => 'Contains the default panels pages and layouts',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'features',
              2 => 'menu',
              3 => 'oa_core',
              4 => 'oa_sections',
              5 => 'page_manager',
              6 => 'panelizer',
              7 => 'panels',
              8 => 'panels_mini',
              9 => 'panopoly_admin',
              10 => 'strongarm',
              11 => 'variable',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'panelizer:panelizer:1',
                2 => 'panels:pipelines:1',
                3 => 'panels_mini:panels_default:1',
                4 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'menu_custom' => 
              array (
                0 => 'menu-footer',
              ),
              'page_manager_handlers' => 
              array (
                0 => 'node_edit_panel_context_2',
                1 => 'node_edit_panel_context_4',
              ),
              'panelizer_defaults' => 
              array (
                0 => 'node:oa_group:default',
                1 => 'node:oa_section:default',
                2 => 'node:oa_section:default:featured',
                3 => 'node:oa_space:default',
                4 => 'node:oa_space:default:featured',
                5 => 'node:oa_space:space_description',
              ),
              'panels_mini' => 
              array (
                0 => 'default_section_sidebar',
                1 => 'oa_footer_panel',
                2 => 'oa_toolbar_panel',
                3 => 'section_sidebar_top',
              ),
              'panels_renderer_pipeline' => 
              array (
                0 => 'ipe_node_access',
              ),
              'variable' => 
              array (
                0 => 'panelizer_defaults_node_oa_group',
                1 => 'panelizer_defaults_node_oa_section',
                2 => 'panelizer_defaults_node_oa_space',
                3 => 'panelizer_node:oa_section_allowed_layouts_default',
                4 => 'panelizer_node:oa_section_allowed_types_default',
                5 => 'panelizer_node:oa_space_allowed_layouts_default',
                6 => 'panelizer_node:oa_space_allowed_types_default',
                7 => 'panelizer_node:oa_space_default',
              ),
            ),
            'features_exclude' => 
            array (
              'variable' => 
              array (
                'panelizer_node:oa_section_allowed_layouts' => 'panelizer_node:oa_section_allowed_layouts',
                'panelizer_node:oa_space_allowed_layouts' => 'panelizer_node:oa_space_allowed_layouts',
                'panelizer_node:oa_space_allowed_types' => 'panelizer_node:oa_space_allowed_types',
              ),
            ),
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.65',
        ),
        'oa_section_context' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_section_context/oa_section_context.module',
          'basename' => 'oa_section_context.module',
          'name' => 'oa_section_context',
          'info' => 
          array (
            'name' => 'Section Session Context',
            'description' => 'Prepopulate section references from session variable.',
            'package' => 'Open Atrium',
            'core' => '7.x',
            'php' => '5.1',
            'dependencies' => 
            array (
              0 => 'oa_core',
            ),
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.65',
        ),
        'oa_variables' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_variables/oa_variables.module',
          'basename' => 'oa_variables.module',
          'name' => 'oa_variables',
          'info' => 
          array (
            'name' => 'OA variables',
            'description' => 'Configure variables overrides for oa',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'og_variables',
              2 => 'strongarm',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'variable' => 
              array (
                0 => 'variable_realm_list_og',
              ),
            ),
            'project path' => 'sites/all/modules/contrib/oa_core/modules',
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.65',
        ),
        'oa_update' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_update/oa_update.module',
          'basename' => 'oa_update.module',
          'name' => 'oa_update',
          'info' => 
          array (
            'name' => 'Open Atrium Updater',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'update',
            ),
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'description' => '',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.65',
        ),
        'oa_news' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_news/oa_news.module',
          'basename' => 'oa_news.module',
          'name' => 'oa_news',
          'info' => 
          array (
            'name' => 'Open Atrium News',
            'description' => 'News layout for Open Atrium',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'oa_core',
              2 => 'oa_sections',
              3 => 'panelizer',
              4 => 'strongarm',
              5 => 'views',
              6 => 'views_content',
              7 => 'views_load_more',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'panelizer:panelizer:1',
                1 => 'strongarm:strongarm:1',
                2 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'panelizer_defaults' => 
              array (
                0 => 'node:oa_section:oa_section_news',
              ),
              'views_view' => 
              array (
                0 => 'open_atrium_news',
              ),
            ),
            'features_exclude' => 
            array (
              'dependencies' => 
              array (
                'oa_layouts' => 'oa_layouts',
              ),
            ),
            'project path' => 'sites/all/modules/contrib/oa_core/modules',
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.65',
        ),
        'oa_permissions' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_permissions/oa_permissions.module',
          'basename' => 'oa_permissions.module',
          'name' => 'oa_permissions',
          'info' => 
          array (
            'name' => 'Open Atrium Permissions',
            'description' => 'User and role permissions for Open Atrium',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'caption_filter',
              1 => 'ctools',
              2 => 'features',
              3 => 'fieldable_panels_panes',
              4 => 'file_entity',
              5 => 'filter',
              6 => 'image_resize_filter',
              7 => 'media',
              8 => 'media_internet',
              9 => 'message',
              10 => 'node',
              11 => 'oa_buttons',
              12 => 'oa_core',
              13 => 'oa_layouts',
              14 => 'oa_sections',
              15 => 'og',
              16 => 'og_menu_single',
              17 => 'og_ui',
              18 => 'og_variables',
              19 => 'og_vocab',
              20 => 'panelizer',
              21 => 'panels',
              22 => 'panels_breadcrumbs',
              23 => 'panopoly_widgets',
              24 => 'panopoly_wysiwyg',
              25 => 'save_draft',
              26 => 'strongarm',
              27 => 'trash_flag',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'og_features_permission' => 
              array (
                0 => 'node:oa_group:add user',
                1 => 'node:oa_group:administer group',
                2 => 'node:oa_group:administer taxonomy',
                3 => 'node:oa_group:approve and deny subscription',
                4 => 'node:oa_group:delete terms',
                5 => 'node:oa_group:edit terms',
                6 => 'node:oa_group:manage appearance',
                7 => 'node:oa_group:manage members',
                8 => 'node:oa_group:manage menu',
                9 => 'node:oa_group:manage permissions',
                10 => 'node:oa_group:manage roles',
                11 => 'node:oa_group:manage variables',
                12 => 'node:oa_group:subscribe',
                13 => 'node:oa_group:subscribe without approval',
                14 => 'node:oa_group:trash any content',
                15 => 'node:oa_group:unsubscribe',
                16 => 'node:oa_group:untrash any content',
                17 => 'node:oa_group:update group',
                18 => 'node:oa_group:use any oa button space_type',
                19 => 'node:oa_group:view trash bin',
                20 => 'node:oa_space:add user',
                21 => 'node:oa_space:administer group',
                22 => 'node:oa_space:administer taxonomy',
                23 => 'node:oa_space:approve and deny subscription',
                24 => 'node:oa_space:delete terms',
                25 => 'node:oa_space:edit terms',
                26 => 'node:oa_space:manage appearance',
                27 => 'node:oa_space:manage members',
                28 => 'node:oa_space:manage menu',
                29 => 'node:oa_space:manage permissions',
                30 => 'node:oa_space:manage roles',
                31 => 'node:oa_space:manage variables',
                32 => 'node:oa_space:subscribe',
                33 => 'node:oa_space:subscribe without approval',
                34 => 'node:oa_space:trash any content',
                35 => 'node:oa_space:unsubscribe',
                36 => 'node:oa_space:untrash any content',
                37 => 'node:oa_space:update group',
                38 => 'node:oa_space:use any oa button space_type',
                39 => 'node:oa_space:view trash bin',
              ),
              'user_permission' => 
              array (
                0 => 'access user profiles',
                1 => 'add media from remote sources',
                2 => 'administer panelizer node oa_group content',
                3 => 'administer panelizer node oa_group context',
                4 => 'administer panelizer node oa_group defaults',
                5 => 'administer panelizer node oa_group layout',
                6 => 'administer panelizer node oa_group overview',
                7 => 'administer panelizer node oa_group settings',
                8 => 'administer panelizer node oa_section breadcrumbs',
                9 => 'administer panelizer node oa_section content',
                10 => 'administer panelizer node oa_section context',
                11 => 'administer panelizer node oa_section defaults',
                12 => 'administer panelizer node oa_section layout',
                13 => 'administer panelizer node oa_section overview',
                14 => 'administer panelizer node oa_section settings',
                15 => 'administer panelizer node oa_space breadcrumbs',
                16 => 'administer panelizer node oa_space content',
                17 => 'administer panelizer node oa_space context',
                18 => 'administer panelizer node oa_space defaults',
                19 => 'administer panelizer node oa_space layout',
                20 => 'administer panelizer node oa_space overview',
                21 => 'administer panelizer node oa_space settings',
                22 => 'administer panelizer node oa_team breadcrumbs',
                23 => 'administer panelizer node oa_team content',
                24 => 'administer panelizer node oa_team context',
                25 => 'administer panelizer node oa_team defaults',
                26 => 'administer panelizer node oa_team layout',
                27 => 'administer panelizer node oa_team overview',
                28 => 'administer panelizer node oa_team settings',
                29 => 'administer panelizer user user breadcrumbs',
                30 => 'administer panelizer user user content',
                31 => 'administer panelizer user user context',
                32 => 'administer panelizer user user defaults',
                33 => 'administer panelizer user user layout',
                34 => 'administer panelizer user user overview',
                35 => 'administer panelizer user user settings',
                36 => 'administer panels styles',
                37 => 'change layouts in place editing',
                38 => 'create fieldable basic_file',
                39 => 'create fieldable image',
                40 => 'create fieldable map',
                41 => 'create fieldable quick_links',
                42 => 'create fieldable spotlight',
                43 => 'create fieldable table',
                44 => 'create fieldable text',
                45 => 'create fieldable video',
                46 => 'create files',
                47 => 'create messages',
                48 => 'delete any document files',
                49 => 'delete any image files',
                50 => 'delete any video files',
                51 => 'delete fieldable basic_file',
                52 => 'delete fieldable image',
                53 => 'delete fieldable map',
                54 => 'delete fieldable quick_links',
                55 => 'delete fieldable spotlight',
                56 => 'delete fieldable table',
                57 => 'delete fieldable text',
                58 => 'delete fieldable video',
                59 => 'delete own document files',
                60 => 'delete own image files',
                61 => 'delete own video files',
                62 => 'download any document files',
                63 => 'download any image files',
                64 => 'download any video files',
                65 => 'download own document files',
                66 => 'download own image files',
                67 => 'download own video files',
                68 => 'edit any document files',
                69 => 'edit any image files',
                70 => 'edit any video files',
                71 => 'edit fieldable basic_file',
                72 => 'edit fieldable image',
                73 => 'edit fieldable map',
                74 => 'edit fieldable quick_links',
                75 => 'edit fieldable spotlight',
                76 => 'edit fieldable table',
                77 => 'edit fieldable text',
                78 => 'edit fieldable video',
                79 => 'edit own document files',
                80 => 'edit own image files',
                81 => 'edit own video files',
                82 => 'save draft',
                83 => 'use panels in place editing',
                84 => 'use text format panopoly_html_text',
                85 => 'use text format panopoly_wysiwyg_text',
                86 => 'view files',
                87 => 'view own files',
                88 => 'view own private files',
                89 => 'view own unpublished content',
                90 => 'view private files',
              ),
              'variable' => 
              array (
                0 => 'og_group_manager_admin_role',
                1 => 'og_group_manager_full_access',
              ),
            ),
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.65',
        ),
        'oa_teams' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_teams/oa_teams.module',
          'basename' => 'oa_teams.module',
          'name' => 'oa_teams',
          'info' => 
          array (
            'name' => 'Open Atrium Teams',
            'description' => 'Teams within spaces',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'entityreference',
              2 => 'features',
              3 => 'oa_core',
              4 => 'og',
              5 => 'options',
              6 => 'page_manager',
              7 => 'panelizer',
              8 => 'panopoly_pages',
              9 => 'select2widget',
              10 => 'strongarm',
              11 => 'text',
              12 => 'views',
              13 => 'views_content',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'oa_teams.css',
              ),
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'panelizer:panelizer:1',
                2 => 'strongarm:strongarm:1',
                3 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_oa_team_users',
              ),
              'field_instance' => 
              array (
                0 => 'node-oa_team-body',
                1 => 'node-oa_team-field_oa_team_users',
                2 => 'node-oa_team-og_group_ref',
              ),
              'node' => 
              array (
                0 => 'oa_team',
              ),
              'page_manager_handlers' => 
              array (
                0 => 'node_edit_panel_context_3',
              ),
              'panelizer_defaults' => 
              array (
                0 => 'node:oa_team:default',
              ),
              'variable' => 
              array (
                0 => 'field_bundle_settings_node__oa_team',
                1 => 'language_content_type_oa_team',
                2 => 'menu_options_oa_team',
                3 => 'menu_parent_oa_team',
                4 => 'node_options_oa_team',
                5 => 'node_preview_oa_team',
                6 => 'node_submitted_oa_team',
                7 => 'panelizer_defaults_node_oa_team',
              ),
              'views_view' => 
              array (
                0 => 'oa_team_list',
                1 => 'open_atrium_team_filters',
              ),
            ),
            'features_exclude' => 
            array (
              'variable' => 
              array (
                'comment_anonymous_oa_team' => 'comment_anonymous_oa_team',
                'comment_default_mode_oa_team' => 'comment_default_mode_oa_team',
                'comment_default_per_page_oa_team' => 'comment_default_per_page_oa_team',
                'comment_form_location_oa_team' => 'comment_form_location_oa_team',
                'comment_oa_team' => 'comment_oa_team',
                'comment_preview_oa_team' => 'comment_preview_oa_team',
                'comment_subject_field_oa_team' => 'comment_subject_field_oa_team',
              ),
            ),
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.65',
        ),
        'oa_sections' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_sections/oa_sections.module',
          'basename' => 'oa_sections.module',
          'name' => 'oa_sections',
          'info' => 
          array (
            'name' => 'Open Atrium Sections',
            'description' => 'Section landing pages within space.',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'entityreference',
              2 => 'features',
              3 => 'features_template',
              4 => 'field_group',
              5 => 'image',
              6 => 'list',
              7 => 'media',
              8 => 'number',
              9 => 'oa_core',
              10 => 'oa_teams',
              11 => 'og',
              12 => 'options',
              13 => 'panopoly_pages',
              14 => 'reference_option_limit',
              15 => 'select2widget',
              16 => 'strongarm',
              17 => 'taxonomy',
              18 => 'text',
              19 => 'views',
              20 => 'views_content',
              21 => 'views_load_more',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'oa_sections.css',
              ),
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'field_group:field_group:1',
                1 => 'page_manager:pages_default:1',
                2 => 'strongarm:strongarm:1',
                3 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_oa_group_ref',
                1 => 'field_oa_icon_class',
                2 => 'field_oa_icon_image',
                3 => 'field_oa_section',
                4 => 'field_oa_section_type_menu',
                5 => 'field_oa_section_weight',
                6 => 'field_oa_team_ref',
                7 => 'field_oa_user_ref',
              ),
              'field_group' => 
              array (
                0 => 'group_access|node|oa_section|form',
              ),
              'field_instance' => 
              array (
                0 => 'node-oa_section-body',
                1 => 'node-oa_section-field_oa_group_ref',
                2 => 'node-oa_section-field_oa_section',
                3 => 'node-oa_section-field_oa_section_override',
                4 => 'node-oa_section-field_oa_section_weight',
                5 => 'node-oa_section-field_oa_team_ref',
                6 => 'node-oa_section-field_oa_user_ref',
                7 => 'node-oa_section-og_group_ref',
                8 => 'taxonomy_term-section_type-field_oa_icon_class',
                9 => 'taxonomy_term-section_type-field_oa_icon_image',
                10 => 'taxonomy_term-section_type-field_oa_section_layout',
                11 => 'taxonomy_term-section_type-field_oa_section_type_menu',
              ),
              'node' => 
              array (
                0 => 'oa_section',
              ),
              'taxonomy' => 
              array (
                0 => 'section_type',
              ),
              'variable' => 
              array (
                0 => 'additional_settings__active_tab_oa_section',
                1 => 'date_popup_authored_enabled_oa_section',
                2 => 'date_popup_authored_format_oa_section',
                3 => 'date_popup_authored_year_range_oa_section',
                4 => 'diff_enable_revisions_page_node_oa_section',
                5 => 'diff_show_preview_changes_node_oa_section',
                6 => 'diff_view_mode_preview_node_oa_section',
                7 => 'field_bundle_settings_node__oa_section',
                8 => 'language_content_type_oa_section',
                9 => 'menu_options_oa_section',
                10 => 'menu_parent_oa_section',
                11 => 'node_options_oa_section',
                12 => 'node_preview_oa_section',
                13 => 'node_submitted_oa_section',
                14 => 'og_menu_enable_oa_section',
                15 => 'panelizer_node:oa_section_default',
              ),
              'views_view' => 
              array (
                0 => 'oa_sections_section_types',
                1 => 'open_atrium_section_pages',
              ),
            ),
            'features_exclude' => 
            array (
              'dependencies' => 
              array (
                'oa_buttons' => 'oa_buttons',
                'og_ui' => 'og_ui',
              ),
              'variable' => 
              array (
                'comment_anonymous_oa_section' => 'comment_anonymous_oa_section',
                'comment_default_mode_oa_section' => 'comment_default_mode_oa_section',
                'comment_default_per_page_oa_section' => 'comment_default_per_page_oa_section',
                'comment_form_location_oa_section' => 'comment_form_location_oa_section',
                'comment_oa_section' => 'comment_oa_section',
                'comment_preview_oa_section' => 'comment_preview_oa_section',
                'comment_subject_field_oa_section' => 'comment_subject_field_oa_section',
              ),
            ),
            'files' => 
            array (
              0 => 'tests/oa_sectionsAccess.test',
              1 => 'tests/oa_sectionsAccessBase.test',
              2 => 'tests/oa_sectionsNodePrivateAccess.test',
              3 => 'tests/oa_sectionsNodePublicAccess.test',
              4 => 'tests/oa_sectionsNodeAccessBase.test',
            ),
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-2.65',
        ),
        'oa_messages' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_messages/oa_messages.module',
          'basename' => 'oa_messages.module',
          'name' => 'oa_messages',
          'info' => 
          array (
            'name' => 'Open Atrium Messages',
            'description' => 'Message types for Open Atrium',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'entity',
              2 => 'entityreference',
              3 => 'features',
              4 => 'list',
              5 => 'message',
              6 => 'message_notify',
              7 => 'message_subscribe',
              8 => 'number',
              9 => 'oa_core',
              10 => 'og',
              11 => 'og_ui',
              12 => 'options',
              13 => 'strongarm',
              14 => 'text',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_deleted_summary',
                1 => 'field_deleted_title',
                2 => 'field_oa_comment_ref',
                3 => 'field_oa_message_section',
                4 => 'field_oa_message_space',
                5 => 'field_oa_message_text',
                6 => 'field_oa_node_ref',
              ),
              'field_instance' => 
              array (
                0 => 'message-oa_comment-field_oa_comment_ref',
                1 => 'message-oa_comment-field_oa_message_section',
                2 => 'message-oa_comment-field_oa_message_space',
                3 => 'message-oa_comment-field_oa_message_text',
                4 => 'message-oa_comment-field_oa_node_ref',
                5 => 'message-oa_create-field_oa_message_section',
                6 => 'message-oa_create-field_oa_message_space',
                7 => 'message-oa_create-field_oa_message_text',
                8 => 'message-oa_create-field_oa_node_ref',
                9 => 'message-oa_delete-field_deleted_summary',
                10 => 'message-oa_delete-field_deleted_title',
                11 => 'message-oa_delete-field_oa_message_section',
                12 => 'message-oa_delete-field_oa_message_space',
                13 => 'message-oa_member-field_oa_message_section',
                14 => 'message-oa_member-field_oa_message_space',
                15 => 'message-oa_member-field_oa_message_text',
                16 => 'message-oa_update-field_oa_message_section',
                17 => 'message-oa_update-field_oa_message_space',
                18 => 'message-oa_update-field_oa_message_text',
                19 => 'message-oa_update-field_oa_node_ref',
              ),
              'message_type' => 
              array (
                0 => 'oa_comment',
                1 => 'oa_create',
                2 => 'oa_delete',
                3 => 'oa_member',
                4 => 'oa_update',
              ),
              'variable' => 
              array (
                0 => 'field_bundle_settings_message__oa_comment',
                1 => 'field_bundle_settings_message__oa_create',
                2 => 'field_bundle_settings_message__oa_delete',
                3 => 'field_bundle_settings_message__oa_member',
                4 => 'field_bundle_settings_message__oa_update',
              ),
            ),
            'files' => 
            array (
              0 => 'plugins/message_notify/notifier/oa_email/OaEmail.class.php',
            ),
            'project path' => 'sites/all/modules/contrib/oa_core/modules',
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.65',
        ),
        'oa_panopoly_users' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/modules/oa_panopoly_users/oa_panopoly_users.module',
          'basename' => 'oa_panopoly_users.module',
          'name' => 'oa_panopoly_users',
          'info' => 
          array (
            'name' => 'Open Atrium Panopoly Users',
            'description' => 'Overrides for Panopoly Users',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'features',
              2 => 'image',
              3 => 'oa_core',
              4 => 'oa_river',
              5 => 'panelizer',
              6 => 'panopoly_users',
              7 => 'strongarm',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'features_override_items' => 
              array (
                0 => 'page_manager_handlers.pm_existing_pages_user_login_panel_context',
              ),
              'features_overrides' => 
              array (
                0 => 'page_manager_handlers.pm_existing_pages_user_login_panel_context.conf|body_classes_to_add',
                1 => 'page_manager_handlers.pm_existing_pages_user_login_panel_context.conf|body_classes_to_remove',
                2 => 'page_manager_handlers.pm_existing_pages_user_login_panel_context.conf|display|content|new-36405db8-54c5-495c-ba8a-0a5f7ade185a|configuration|override_title_text',
                3 => 'page_manager_handlers.pm_existing_pages_user_login_panel_context.conf|display|hide_title',
                4 => 'page_manager_handlers.pm_existing_pages_user_login_panel_context.conf|display|layout',
                5 => 'page_manager_handlers.pm_existing_pages_user_login_panel_context.conf|display|panel_settings|contentmain',
              ),
              'variable' => 
              array (
                0 => 'panelizer_defaults_user_user',
              ),
            ),
            'features_exclude' => 
            array (
              'field_base' => 
              array (
                'field_user_about' => 'field_user_about',
                'field_user_picture' => 'field_user_picture',
              ),
            ),
            'version' => '7.x-2.65',
            'project' => 'oa_core',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.65',
        ),
        'oa_core' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_core/oa_core.module',
          'basename' => 'oa_core.module',
          'name' => 'oa_core',
          'info' => 
          array (
            'name' => 'Open Atrium Core',
            'description' => 'Core required module for Open Atrium.',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'project' => 'oa_core',
            'dependencies' => 
            array (
              0 => 'admin_views',
              1 => 'conditional_styles',
              2 => 'entity',
              3 => 'entityreference',
              4 => 'file_entity',
              5 => 'image',
              6 => 'list',
              7 => 'mimemail',
              8 => 'number',
              9 => 'oa_buttons',
              10 => 'oa_section_context',
              11 => 'oa_sections',
              12 => 'oa_subspaces',
              13 => 'oa_teams',
              14 => 'og',
              15 => 'og_access',
              16 => 'og_context',
              17 => 'og_menu_single',
              18 => 'og_register',
              19 => 'og_session_context',
              20 => 'og_ui',
              21 => 'og_vocab',
              22 => 'panelizer',
              23 => 'panopoly_pages',
              24 => 'paragraphs',
              25 => 'views_content',
              26 => 'views_load_more',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/oa_core.css',
              ),
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'panelizer:panelizer:1',
                2 => 'strongarm:strongarm:1',
                3 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_oa_media',
                1 => 'field_oa_section_layout',
                2 => 'field_oa_section_override',
                3 => 'field_oa_space_type',
                4 => 'group_access',
                5 => 'group_group',
                6 => 'oa_other_spaces_ref',
                7 => 'oa_section_ref',
                8 => 'og_group_ref',
                9 => 'og_roles_permissions',
                10 => 'og_vocabulary',
              ),
              'field_instance' => 
              array (
                0 => 'node-oa_group-body',
                1 => 'node-oa_group-field_featured_image',
                2 => 'node-oa_group-group_access',
                3 => 'node-oa_group-group_group',
                4 => 'node-oa_group-og_roles_permissions',
                5 => 'node-oa_space-body',
                6 => 'node-oa_space-field_featured_image',
                7 => 'node-oa_space-field_oa_section_override',
                8 => 'node-oa_space-field_oa_space_type',
                9 => 'node-oa_space-group_access',
                10 => 'node-oa_space-group_group',
                11 => 'node-oa_space-og_roles_permissions',
                12 => 'taxonomy_term-space_type-field_oa_section_layout',
              ),
              'filter' => 
              array (
                0 => 'full_html',
              ),
              'image' => 
              array (
                0 => 'oa_medium_thumbnail',
                1 => 'oa_small_thumbnail',
              ),
              'node' => 
              array (
                0 => 'oa_group',
                1 => 'oa_space',
              ),
              'page_manager_pages' => 
              array (
                0 => 'oa_spaces',
                1 => 'page_oa_groups',
                2 => 'page_user_groups',
                3 => 'space_content',
                4 => 'space_members',
                5 => 'user_spaces',
              ),
              'taxonomy' => 
              array (
                0 => 'space_type',
              ),
              'variable' => 
              array (
                0 => 'field_bundle_settings_node__oa_group',
                1 => 'field_bundle_settings_node__oa_space',
                2 => 'language_content_type_oa_group',
                3 => 'menu_options_oa_group',
                4 => 'menu_options_oa_space',
                5 => 'menu_parent_oa_group',
                6 => 'menu_parent_oa_space',
                7 => 'mimemail_format',
                8 => 'mimemail_linkonly',
                9 => 'mimemail_sitestyle',
                10 => 'mimemail_textonly',
                11 => 'node_options_oa_group',
                12 => 'node_options_oa_space',
                13 => 'node_preview_oa_group',
                14 => 'node_preview_oa_space',
                15 => 'node_submitted_oa_group',
                16 => 'node_submitted_oa_space',
                17 => 'og_use_queue',
                18 => 'pathauto_node_oa_group_pattern',
                19 => 'pathauto_node_oa_space_pattern',
                20 => 'pathauto_node_pattern',
              ),
              'views_view' => 
              array (
                0 => 'oa_core_space_types',
                1 => 'open_atrium_content',
                2 => 'open_atrium_groups',
                3 => 'open_atrium_user_filters',
              ),
            ),
            'features_exclude' => 
            array (
              'dependencies' => 
              array (
                'features_template' => 'features_template',
                'oa_clone' => 'oa_clone',
                'oa_subspaces' => 'oa_subspaces',
                'oa_drive' => 'oa_drive',
              ),
              'variable' => 
              array (
                'comment_anonymous_oa_group' => 'comment_anonymous_oa_group',
                'comment_anonymous_oa_space' => 'comment_anonymous_oa_space',
                'comment_default_mode_oa_group' => 'comment_default_mode_oa_group',
                'comment_default_mode_oa_space' => 'comment_default_mode_oa_space',
                'comment_default_per_page_oa_group' => 'comment_default_per_page_oa_group',
                'comment_default_per_page_oa_space' => 'comment_default_per_page_oa_space',
                'comment_form_location_oa_group' => 'comment_form_location_oa_group',
                'comment_form_location_oa_space' => 'comment_form_location_oa_space',
                'comment_oa_group' => 'comment_oa_group',
                'comment_oa_space' => 'comment_oa_space',
                'comment_preview_oa_group' => 'comment_preview_oa_group',
                'comment_preview_oa_space' => 'comment_preview_oa_space',
                'comment_subject_field_oa_group' => 'comment_subject_field_oa_group',
                'comment_subject_field_oa_space' => 'comment_subject_field_oa_space',
              ),
            ),
            'files' => 
            array (
              0 => 'tests/*.test',
              1 => 'tests/oa_coreBase.test',
              2 => 'tests/oa_coreSmoke.test',
              3 => 'tests/oa_core_section_accessUnit.test',
              4 => 'tests/oa_core_section_is_publicUnit.test',
              5 => 'tests/oa_corePermissionWeb.test',
              6 => 'tests/oaTestingMailSystem.inc',
              7 => 'plugins/views/oa_views_plugin_exposed_form.inc',
              8 => 'plugins/views/oa_core_og_group_ref_views_handler_filter_in_operator.inc',
              9 => 'plugins/views/oa_core_oa_section_ref_views_handler_filter_in_operator.inc',
              10 => 'plugins/views/oa_core_og_group_ref_views_handler_filter_entityreference_autocomplete.inc',
              11 => 'plugins/views/oa_core_views_handler_argument_numeric_og_membership_gid.inc',
            ),
            'version' => '7.x-2.65',
            'datestamp' => '1447959244',
            'php' => '5.2.4',
          ),
          'schema_version' => '7235',
          'version' => '7.x-2.65',
        ),
        'actions_permissions' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/views_bulk_operations/actions_permissions.module',
          'basename' => 'actions_permissions.module',
          'name' => 'actions_permissions',
          'info' => 
          array (
            'name' => 'Actions permissions (VBO)',
            'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
            'package' => 'Administration',
            'core' => '7.x',
            'version' => '7.x-3.3',
            'project' => 'views_bulk_operations',
            'datestamp' => '1435764542',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-3.3',
        ),
        'views_bulk_operations' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/views_bulk_operations/views_bulk_operations.module',
          'basename' => 'views_bulk_operations.module',
          'name' => 'views_bulk_operations',
          'info' => 
          array (
            'name' => 'Views Bulk Operations',
            'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
            'dependencies' => 
            array (
              0 => 'entity',
              1 => 'views',
            ),
            'package' => 'Views',
            'core' => '7.x',
            'php' => '5.2.9',
            'files' => 
            array (
              0 => 'plugins/operation_types/base.class.php',
              1 => 'views/views_bulk_operations_handler_field_operations.inc',
            ),
            'version' => '7.x-3.3',
            'project' => 'views_bulk_operations',
            'datestamp' => '1435764542',
          ),
          'schema_version' => 0,
          'version' => '7.x-3.3',
        ),
        'googleanalytics' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/google_analytics/googleanalytics.module',
          'basename' => 'googleanalytics.module',
          'name' => 'googleanalytics',
          'info' => 
          array (
            'name' => 'Google Analytics',
            'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
            'core' => '7.x',
            'package' => 'Statistics',
            'configure' => 'admin/config/system/googleanalytics',
            'files' => 
            array (
              0 => 'googleanalytics.test',
            ),
            'test_dependencies' => 
            array (
              0 => 'token',
            ),
            'version' => '7.x-2.1',
            'project' => 'google_analytics',
            'datestamp' => '1417276982',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7205',
          'version' => '7.x-2.1',
        ),
        'references_dialog' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/references_dialog/references_dialog.module',
          'basename' => 'references_dialog.module',
          'name' => 'references_dialog',
          'info' => 
          array (
            'name' => 'References dialog',
            'description' => 'Enhances references fields by adding dialogs for adding and creating entities.',
            'package' => 'Fields',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'views',
            ),
            'files' => 
            array (
              0 => 'views/references_dialog_plugin_display.inc',
            ),
            'version' => '7.x-1.0-beta1',
            'project' => 'references_dialog',
            'datestamp' => '1405042428',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta1',
        ),
        'caption_filter' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/caption_filter/caption_filter.module',
          'basename' => 'caption_filter.module',
          'name' => 'caption_filter',
          'info' => 
          array (
            'name' => 'Caption Filter',
            'description' => 'Filter to parse [caption] tags and allow image alignment.',
            'core' => '7.x',
            'package' => 'Input filters',
            'version' => '7.x-1.2+9-dev',
            'project' => 'caption_filter',
            'datestamp' => '1447964425',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7100',
          'version' => '7.x-1.2+9-dev',
        ),
        'search_api_db' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/search_api_db/search_api_db.module',
          'basename' => 'search_api_db.module',
          'name' => 'search_api_db',
          'info' => 
          array (
            'name' => 'Database search',
            'description' => 'Offers an implementation of the Search API that uses database tables for indexing content.',
            'dependencies' => 
            array (
              0 => 'search_api',
            ),
            'core' => '7.x',
            'package' => 'Search',
            'files' => 
            array (
              0 => 'search_api_db.test',
              1 => 'service.inc',
            ),
            'version' => '7.x-1.4',
            'project' => 'search_api_db',
            'datestamp' => '1410186261',
            'php' => '5.2.4',
          ),
          'schema_version' => '7106',
          'version' => '7.x-1.4',
        ),
        'clone' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/node_clone/clone.module',
          'basename' => 'clone.module',
          'name' => 'clone',
          'info' => 
          array (
            'name' => 'Node clone',
            'description' => 'Allows users to clone (copy then edit) an existing node.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'views/views_handler_field_node_link_clone.inc',
            ),
            'configure' => 'admin/config/content/clone',
            'version' => '7.x-1.0-rc2',
            'project' => 'node_clone',
            'datestamp' => '1386176910',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-rc2',
        ),
        'media_wysiwyg_view_mode' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/media/modules/media_wysiwyg_view_mode/media_wysiwyg_view_mode.module',
          'basename' => 'media_wysiwyg_view_mode.module',
          'name' => 'media_wysiwyg_view_mode',
          'info' => 
          array (
            'name' => 'Media WYSIWYG View Mode',
            'description' => 'Enables files inside of the WYSIWYG editor to be displayed using a separate view mode.',
            'package' => 'Media',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'media_wysiwyg',
            ),
            'configure' => 'admin/config/media/wysiwyg-view-mode',
            'files' => 
            array (
              0 => 'media_wysiwyg_view_mode.test',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'media',
            'datestamp' => '1436895542',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0-beta1',
        ),
        'media_wysiwyg' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/media/modules/media_wysiwyg/media_wysiwyg.module',
          'basename' => 'media_wysiwyg.module',
          'name' => 'media_wysiwyg',
          'info' => 
          array (
            'name' => 'Media WYSIWYG',
            'description' => 'Adds support for embedding media using client-side WYSIWYG editors.',
            'package' => 'Media',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'media',
            ),
            'test_dependencies' => 
            array (
              0 => 'ckeditor',
              1 => 'token',
              2 => 'wysiwyg',
            ),
            'files' => 
            array (
              0 => 'media_wysiwyg.test',
              1 => 'tests/media_wysiwyg.file_usage.test',
              2 => 'tests/media_wysiwyg.macro.test',
            ),
            'configure' => 'admin/config/media/browser',
            'version' => '7.x-2.0-beta1',
            'project' => 'media',
            'datestamp' => '1436895542',
            'php' => '5.2.4',
          ),
          'schema_version' => '7202',
          'version' => '7.x-2.0-beta1',
        ),
        'media_bulk_upload' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/media/modules/media_bulk_upload/media_bulk_upload.module',
          'basename' => 'media_bulk_upload.module',
          'name' => 'media_bulk_upload',
          'info' => 
          array (
            'name' => 'Media Bulk Upload',
            'description' => 'Adds support for uploading multiple files at a time.',
            'package' => 'Media',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'media',
              1 => 'multiform',
              2 => 'plupload',
            ),
            'test_dependencies' => 
            array (
              0 => 'multiform',
              1 => 'plupload',
            ),
            'files' => 
            array (
              0 => 'includes/MediaBrowserBulkUpload.inc',
              1 => 'tests/media_bulk_upload.test',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'media',
            'datestamp' => '1436895542',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0-beta1',
        ),
        'media_internet' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/media/modules/media_internet/media_internet.module',
          'basename' => 'media_internet.module',
          'name' => 'media_internet',
          'info' => 
          array (
            'name' => 'Media Internet Sources',
            'description' => 'Provides an API for accessing media on various internet services',
            'package' => 'Media',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'media',
            ),
            'files' => 
            array (
              0 => 'includes/MediaBrowserInternet.inc',
              1 => 'includes/MediaInternetBaseHandler.inc',
              2 => 'includes/MediaInternetFileHandler.inc',
              3 => 'includes/MediaInternetNoHandlerException.inc',
              4 => 'includes/MediaInternetValidationException.inc',
              5 => 'tests/media_internet.test',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'media',
            'datestamp' => '1436895542',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-2.0-beta1',
        ),
        'mediafield' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/media/modules/mediafield/mediafield.module',
          'basename' => 'mediafield.module',
          'name' => 'mediafield',
          'info' => 
          array (
            'name' => 'Media Field',
            'description' => 'Provides a field type that stores media-specific data. <em>Deprecated by the core File field type.</em>',
            'package' => 'Media',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'media',
            ),
            'version' => '7.x-2.0-beta1',
            'project' => 'media',
            'datestamp' => '1436895542',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0-beta1',
        ),
        'media' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/media/media.module',
          'basename' => 'media.module',
          'name' => 'media',
          'info' => 
          array (
            'name' => 'Media',
            'description' => 'Provides the core Media API',
            'package' => 'Media',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'file_entity',
              1 => 'image',
              2 => 'views',
            ),
            'test_dependencies' => 
            array (
              0 => 'token',
            ),
            'files' => 
            array (
              0 => 'includes/MediaReadOnlyStreamWrapper.inc',
              1 => 'includes/MediaBrowserPluginInterface.inc',
              2 => 'includes/MediaBrowserPlugin.inc',
              3 => 'includes/MediaBrowserUpload.inc',
              4 => 'includes/MediaBrowserView.inc',
              5 => 'includes/MediaEntityTranslationHandler.inc',
              6 => 'includes/media_views_plugin_display_media_browser.inc',
              7 => 'includes/media_views_plugin_style_media_browser.inc',
              8 => 'tests/media.test',
            ),
            'configure' => 'admin/config/media/browser',
            'version' => '7.x-2.0-beta1',
            'project' => 'media',
            'datestamp' => '1436895542',
            'php' => '5.2.4',
          ),
          'schema_version' => '7226',
          'version' => '7.x-2.0-beta1',
        ),
        'simpletest_clone' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/simpletest_clone/simpletest_clone.module',
          'basename' => 'simpletest_clone.module',
          'name' => 'simpletest_clone',
          'info' => 
          array (
            'name' => 'SimpleTest Clone',
            'description' => 'Write SimpleTests against an existing Drupal configuration.',
            'package' => 'Development',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'simpletest',
            ),
            'files' => 
            array (
              0 => 'simpletest_clone_test_case.php',
            ),
            'version' => '7.x-1.0-beta3+1-dev',
            'project' => 'simpletest_clone',
            'datestamp' => '1447964450',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta3+1-dev',
        ),
        'simplified_menu_admin' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/simplified_menu_admin/simplified_menu_admin.module',
          'basename' => 'simplified_menu_admin.module',
          'name' => 'simplified_menu_admin',
          'info' => 
          array (
            'name' => 'Simplified menu administration',
            'description' => 'Simplifies the Menu and Shortcut modules by merging "List links" and "Edit menu" into a single administration page.',
            'core' => '7.x',
            'version' => '7.x-1.0',
            'project' => 'simplified_menu_admin',
            'datestamp' => '1439833140',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0',
        ),
        'media_youtube' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/media_youtube/media_youtube.module',
          'basename' => 'media_youtube.module',
          'name' => 'media_youtube',
          'info' => 
          array (
            'name' => 'Media: YouTube',
            'description' => 'Adds YouTube as a supported media provider.',
            'package' => 'Media',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'media_internet',
            ),
            'files' => 
            array (
              0 => 'includes/MediaYouTubeStreamWrapper.inc',
              1 => 'includes/MediaInternetYouTubeHandler.inc',
            ),
            'version' => '7.x-3.0',
            'project' => 'media_youtube',
            'datestamp' => '1432800182',
            'php' => '5.2.4',
          ),
          'schema_version' => '7204',
          'version' => '7.x-3.0',
        ),
        'variable_admin' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/variable/variable_admin/variable_admin.module',
          'basename' => 'variable_admin.module',
          'name' => 'variable_admin',
          'info' => 
          array (
            'name' => 'Variable admin',
            'description' => 'Variable Administration UI',
            'dependencies' => 
            array (
              0 => 'variable',
            ),
            'package' => 'Variable',
            'core' => '7.x',
            'version' => '7.x-2.5',
            'project' => 'variable',
            'datestamp' => '1398250128',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'variable_views' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/variable/variable_views/variable_views.module',
          'basename' => 'variable_views.module',
          'name' => 'variable_views',
          'info' => 
          array (
            'name' => 'Variable views',
            'description' => 'Provides views integration for variable, included a default variable argument.',
            'dependencies' => 
            array (
              0 => 'variable',
              1 => 'views',
            ),
            'package' => 'Variable',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/views_plugin_argument_default_variable.inc',
              1 => 'includes/views_handler_field_variable_title.inc',
              2 => 'includes/views_handler_field_variable_value.inc',
            ),
            'version' => '7.x-2.5',
            'project' => 'variable',
            'datestamp' => '1398250128',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'variable_example' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/variable/variable_example/variable_example.module',
          'basename' => 'variable_example.module',
          'name' => 'variable_example',
          'info' => 
          array (
            'name' => 'Variable example',
            'description' => 'An example module showing how to use the Variable API and providing some variables.',
            'dependencies' => 
            array (
              0 => 'variable',
              1 => 'variable_store',
            ),
            'package' => 'Example modules',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'variable_example.variable.inc',
            ),
            'version' => '7.x-2.5',
            'project' => 'variable',
            'datestamp' => '1398250128',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'variable_store' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/variable/variable_store/variable_store.module',
          'basename' => 'variable_store.module',
          'name' => 'variable_store',
          'info' => 
          array (
            'name' => 'Variable store',
            'description' => 'Database storage for variable realms. This is an API module.',
            'dependencies' => 
            array (
              0 => 'variable',
            ),
            'package' => 'Variable',
            'core' => '7.x',
            'version' => '7.x-2.5',
            'files' => 
            array (
              0 => 'variable_store.class.inc',
              1 => 'variable_store.test',
            ),
            'project' => 'variable',
            'datestamp' => '1398250128',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-2.5',
        ),
        'variable_realm' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/variable/variable_realm/variable_realm.module',
          'basename' => 'variable_realm.module',
          'name' => 'variable_realm',
          'info' => 
          array (
            'name' => 'Variable realm',
            'description' => 'API to use variable realms from different modules',
            'dependencies' => 
            array (
              0 => 'variable',
            ),
            'package' => 'Variable',
            'core' => '7.x',
            'version' => '7.x-2.5',
            'files' => 
            array (
              0 => 'variable_realm.class.inc',
              1 => 'variable_realm_union.class.inc',
            ),
            'project' => 'variable',
            'datestamp' => '1398250128',
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-2.5',
        ),
        'variable' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/variable/variable.module',
          'basename' => 'variable.module',
          'name' => 'variable',
          'info' => 
          array (
            'name' => 'Variable',
            'description' => 'Variable Information and basic variable API',
            'package' => 'Variable',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/forum.variable.inc',
              1 => 'includes/locale.variable.inc',
              2 => 'includes/menu.variable.inc',
              3 => 'includes/node.variable.inc',
              4 => 'includes/system.variable.inc',
              5 => 'includes/taxonomy.variable.inc',
              6 => 'includes/translation.variable.inc',
              7 => 'includes/user.variable.inc',
              8 => 'variable.test',
            ),
            'version' => '7.x-2.5',
            'project' => 'variable',
            'datestamp' => '1398250128',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'mimemail_compress' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/mimemail/modules/mimemail_compress/mimemail_compress.module',
          'basename' => 'mimemail_compress.module',
          'name' => 'mimemail_compress',
          'info' => 
          array (
            'name' => 'Mime Mail CSS Compressor',
            'description' => 'Converts CSS to inline styles in an HTML message. (Requires the PHP DOM extension.)',
            'package' => 'Mail',
            'dependencies' => 
            array (
              0 => 'mimemail',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'mimemail_compress.inc',
            ),
            'version' => '7.x-1.0-beta4',
            'project' => 'mimemail',
            'datestamp' => '1438530555',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta4',
        ),
        'mimemail_example' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/mimemail/modules/mimemail_example/mimemail_example.module',
          'basename' => 'mimemail_example.module',
          'name' => 'mimemail_example',
          'info' => 
          array (
            'name' => 'Mime Mail Example',
            'description' => 'Example of how to use the Mime Mail module.',
            'dependencies' => 
            array (
              0 => 'mimemail',
            ),
            'package' => 'Example modules',
            'core' => '7.x',
            'version' => '7.x-1.0-beta4',
            'project' => 'mimemail',
            'datestamp' => '1438530555',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta4',
        ),
        'mimemail_action' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/mimemail/modules/mimemail_action/mimemail_action.module',
          'basename' => 'mimemail_action.module',
          'name' => 'mimemail_action',
          'info' => 
          array (
            'name' => 'Mime Mail Action',
            'description' => 'Provide actions for Mime Mail.',
            'package' => 'Mail',
            'dependencies' => 
            array (
              0 => 'mimemail',
              1 => 'trigger',
            ),
            'core' => '7.x',
            'version' => '7.x-1.0-beta4',
            'project' => 'mimemail',
            'datestamp' => '1438530555',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta4',
        ),
        'mimemail' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/mimemail/mimemail.module',
          'basename' => 'mimemail.module',
          'name' => 'mimemail',
          'info' => 
          array (
            'name' => 'Mime Mail',
            'description' => 'Send MIME-encoded emails with embedded images and attachments.',
            'dependencies' => 
            array (
              0 => 'mailsystem',
              1 => 'system (>=7.24)',
            ),
            'package' => 'Mail',
            'core' => '7.x',
            'configure' => 'admin/config/system/mimemail',
            'files' => 
            array (
              0 => 'includes/mimemail.mail.inc',
              1 => 'tests/mimemail.test',
              2 => 'tests/mimemail_rules.test',
              3 => 'tests/mimemail_compress.test',
            ),
            'version' => '7.x-1.0-beta4',
            'project' => 'mimemail',
            'datestamp' => '1438530555',
            'php' => '5.2.4',
          ),
          'schema_version' => '7002',
          'version' => '7.x-1.0-beta4',
        ),
        'conditional_styles' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/conditional_styles/conditional_styles.module',
          'basename' => 'conditional_styles.module',
          'name' => 'conditional_styles',
          'info' => 
          array (
            'name' => 'Conditional Stylesheets',
            'description' => 'Allows themes to add conditional stylesheets.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'conditional_styles.install',
              1 => 'conditional_styles.module',
              2 => 'tests/conditional_styles.test',
            ),
            'version' => '7.x-2.2',
            'project' => 'conditional_styles',
            'datestamp' => '1373559072',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.2',
        ),
        'dhtml_menu' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/dhtml_menu/dhtml_menu.module',
          'basename' => 'dhtml_menu.module',
          'name' => 'dhtml_menu',
          'info' => 
          array (
            'name' => 'DHTML Menu',
            'description' => 'Opens menus dynamically to reduce page reloads.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'dhtml_menu.module',
              1 => 'dhtml_menu.install',
              2 => 'dhtml_menu.admin.inc',
              3 => 'dhtml_menu.theme.inc',
            ),
            'configure' => 'admin/config/user-interface/dhtml_menu',
            'version' => 'master-dev',
            'project' => 'dhtml_menu',
            'datestamp' => '1447964455',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7104',
          'version' => 'master-dev',
        ),
        'user_picture_field' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/user_picture_field/user_picture_field.module',
          'basename' => 'user_picture_field.module',
          'name' => 'user_picture_field',
          'info' => 
          array (
            'name' => 'user picture field',
            'description' => 'user picture field.',
            'core' => '7.x',
            'version' => '7.x-1.0-rc1',
            'project' => 'user_picture_field',
            'datestamp' => '1344166350',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-rc1',
        ),
        'entityreference_behavior_example' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
          'basename' => 'entityreference_behavior_example.module',
          'name' => 'entityreference_behavior_example',
          'info' => 
          array (
            'name' => 'Entity Reference Behavior Example',
            'description' => 'Provides some example code for implementing Entity Reference behaviors.',
            'core' => '7.x',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'entityreference',
            ),
            'version' => '7.x-1.1+4-dev',
            'project' => 'entityreference',
            'datestamp' => '1447964440',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.1+4-dev',
        ),
        'entityreference' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/entityreference/entityreference.module',
          'basename' => 'entityreference.module',
          'name' => 'entityreference',
          'info' => 
          array (
            'name' => 'Entity Reference',
            'description' => 'Provides a field that can reference other entities.',
            'core' => '7.x',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'entity',
              1 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'entityreference.migrate.inc',
              1 => 'plugins/selection/abstract.inc',
              2 => 'plugins/selection/views.inc',
              3 => 'plugins/behavior/abstract.inc',
              4 => 'views/entityreference_plugin_display.inc',
              5 => 'views/entityreference_plugin_style.inc',
              6 => 'views/entityreference_plugin_row_fields.inc',
              7 => 'views/views_handler_filter_entityreference_autocomplete.inc',
              8 => 'tests/entityreference.handlers.test',
              9 => 'tests/entityreference.taxonomy.test',
              10 => 'tests/entityreference.admin.test',
              11 => 'tests/entityreference.feeds.test',
              12 => 'tests/entityreference.revisions.test',
            ),
            'version' => '7.x-1.1+4-dev',
            'project' => 'entityreference',
            'datestamp' => '1447964440',
            'php' => '5.2.4',
          ),
          'schema_version' => '7003',
          'version' => '7.x-1.1+4-dev',
        ),
        'migrate_example_baseball' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/migrate/migrate_example_baseball/migrate_example_baseball.module',
          'basename' => 'migrate_example_baseball.module',
          'name' => 'migrate_example_baseball',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'migrate',
              2 => 'number',
            ),
            'description' => 'Import baseball box scores.',
            'features' => 
            array (
              'field' => 
              array (
                0 => 'node-migrate_example_baseball-body',
                1 => 'node-migrate_example_baseball-field_attendance',
                2 => 'node-migrate_example_baseball-field_duration',
                3 => 'node-migrate_example_baseball-field_home_batters',
                4 => 'node-migrate_example_baseball-field_home_game_number',
                5 => 'node-migrate_example_baseball-field_home_pitcher',
                6 => 'node-migrate_example_baseball-field_home_score',
                7 => 'node-migrate_example_baseball-field_home_team',
                8 => 'node-migrate_example_baseball-field_outs',
                9 => 'node-migrate_example_baseball-field_park',
                10 => 'node-migrate_example_baseball-field_start_date',
                11 => 'node-migrate_example_baseball-field_visiting_batters',
                12 => 'node-migrate_example_baseball-field_visiting_pitcher',
                13 => 'node-migrate_example_baseball-field_visiting_score',
                14 => 'node-migrate_example_baseball-field_visiting_team',
              ),
              'node' => 
              array (
                0 => 'migrate_example_baseball',
              ),
            ),
            'files' => 
            array (
              0 => 'migrate_example_baseball.migrate.inc',
            ),
            'name' => 'migrate_example_baseball',
            'package' => 'Migration',
            'php' => '5.2.4',
            'version' => '7.x-2.8',
            'project' => 'migrate',
            'datestamp' => '1435760949',
          ),
          'schema_version' => '7201',
          'version' => '7.x-2.8',
        ),
        'migrate_example_oracle' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/migrate/migrate_example/migrate_example_oracle/migrate_example_oracle.module',
          'basename' => 'migrate_example_oracle.module',
          'name' => 'migrate_example_oracle',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'image',
              2 => 'migrate',
            ),
            'description' => 'Content type supporting example of Oracle migration',
            'features' => 
            array (
              'field' => 
              array (
                0 => 'node-migrate_example_oracle-body',
                1 => 'node-migrate_example_oracle-field_mainimage',
              ),
              'node' => 
              array (
                0 => 'migrate_example_oracle',
              ),
            ),
            'files' => 
            array (
              0 => 'migrate_example_oracle.migrate.inc',
            ),
            'name' => 'Migrate example - Oracle',
            'package' => 'Migration',
            'project' => 'migrate',
            'version' => '7.x-2.8',
            'datestamp' => '1435760949',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.8',
        ),
        'migrate_example' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/migrate/migrate_example/migrate_example.module',
          'basename' => 'migrate_example.module',
          'name' => 'migrate_example',
          'info' => 
          array (
            'name' => 'Migrate Example',
            'description' => 'Example migration data.',
            'package' => 'Migration',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'taxonomy',
              1 => 'image',
              2 => 'comment',
              3 => 'migrate',
              4 => 'list',
              5 => 'number',
            ),
            'files' => 
            array (
              0 => 'beer.inc',
              1 => 'wine.inc',
            ),
            'version' => '7.x-2.8',
            'project' => 'migrate',
            'datestamp' => '1435760949',
            'php' => '5.2.4',
          ),
          'schema_version' => '7007',
          'version' => '7.x-2.8',
        ),
        'migrate_ui' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/migrate/migrate_ui/migrate_ui.module',
          'basename' => 'migrate_ui.module',
          'name' => 'migrate_ui',
          'info' => 
          array (
            'name' => 'Migrate UI',
            'description' => 'UI for managing migration processes',
            'package' => 'Migration',
            'configure' => 'admin/content/migrate/configure',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'migrate',
            ),
            'files' => 
            array (
              0 => 'migrate_ui.wizard.inc',
            ),
            'version' => '7.x-2.8',
            'project' => 'migrate',
            'datestamp' => '1435760949',
            'php' => '5.2.4',
          ),
          'schema_version' => '7202',
          'version' => '7.x-2.8',
        ),
        'migrate' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/migrate/migrate.module',
          'basename' => 'migrate.module',
          'name' => 'migrate',
          'info' => 
          array (
            'name' => 'Migrate',
            'description' => 'Import content from external sources',
            'package' => 'Migration',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'includes/base.inc',
              1 => 'includes/field_mapping.inc',
              2 => 'includes/migration.inc',
              3 => 'includes/destination.inc',
              4 => 'includes/exception.inc',
              5 => 'includes/group.inc',
              6 => 'includes/handler.inc',
              7 => 'includes/map.inc',
              8 => 'includes/source.inc',
              9 => 'includes/team.inc',
              10 => 'migrate.mail.inc',
              11 => 'plugins/destinations/block_custom.inc',
              12 => 'plugins/destinations/entity.inc',
              13 => 'plugins/destinations/term.inc',
              14 => 'plugins/destinations/user.inc',
              15 => 'plugins/destinations/node.inc',
              16 => 'plugins/destinations/comment.inc',
              17 => 'plugins/destinations/file.inc',
              18 => 'plugins/destinations/path.inc',
              19 => 'plugins/destinations/fields.inc',
              20 => 'plugins/destinations/poll.inc',
              21 => 'plugins/destinations/table.inc',
              22 => 'plugins/destinations/table_copy.inc',
              23 => 'plugins/destinations/menu.inc',
              24 => 'plugins/destinations/menu_links.inc',
              25 => 'plugins/destinations/statistics.inc',
              26 => 'plugins/destinations/variable.inc',
              27 => 'plugins/sources/csv.inc',
              28 => 'plugins/sources/db2.inc',
              29 => 'plugins/sources/files.inc',
              30 => 'plugins/sources/json.inc',
              31 => 'plugins/sources/list.inc',
              32 => 'plugins/sources/mongodb.inc',
              33 => 'plugins/sources/multiitems.inc',
              34 => 'plugins/sources/sql.inc',
              35 => 'plugins/sources/sqlmap.inc',
              36 => 'plugins/sources/mssql.inc',
              37 => 'plugins/sources/oracle.inc',
              38 => 'plugins/sources/spreadsheet.inc',
              39 => 'plugins/sources/xml.inc',
              40 => 'tests/import/options.test',
              41 => 'tests/plugins/destinations/comment.test',
              42 => 'tests/plugins/destinations/node.test',
              43 => 'tests/plugins/destinations/table.test',
              44 => 'tests/plugins/destinations/term.test',
              45 => 'tests/plugins/destinations/user.test',
              46 => 'tests/plugins/sources/xml.test',
            ),
            'version' => '7.x-2.8',
            'project' => 'migrate',
            'datestamp' => '1435760949',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7207',
          'version' => '7.x-2.8',
        ),
        'mailhandler_php_imap' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/mailhandler/modules/mailhandler_php_imap/mailhandler_php_imap.module',
          'basename' => 'mailhandler_php_imap.module',
          'name' => 'mailhandler_php_imap',
          'info' => 
          array (
            'name' => 'Mailhandler PHP IMAP',
            'description' => 'Retrieves messages from IMAP and POP mailboxes using the PHP IMAP library.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'mailhandler',
            ),
            'package' => 'Mailhandler',
            'files' => 
            array (
              0 => 'mailhandler_php_imap.install',
              1 => 'mailhandler_php_imap.module',
              2 => 'plugins/mailhandler/retrieve/MailhandlerPhpImapRetrieve.class.php',
            ),
            'version' => '7.x-2.9',
            'project' => 'mailhandler',
            'datestamp' => '1379695939',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'mailhandler_default' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/mailhandler/modules/mailhandler_default/mailhandler_default.module',
          'basename' => 'mailhandler_default.module',
          'name' => 'mailhandler_default',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'feeds_ui',
              2 => 'mailhandler',
              3 => 'mailhandler_php_imap',
              4 => 'strongarm',
            ),
            'description' => 'An example importer, source content type, and mailbox to get you started.',
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'feeds:feeds_importer_default:1',
                1 => 'mailhandler:mailhandler_mailbox:2',
                2 => 'strongarm:strongarm:1',
              ),
              'feeds_importer' => 
              array (
                0 => 'mailhandler_nodes',
              ),
              'mailhandler_mailbox' => 
              array (
                0 => 'test_mailbox',
              ),
              'node' => 
              array (
                0 => 'mailhandler_source',
              ),
              'variable' => 
              array (
                0 => 'comment_anonymous_mailhandler_source',
                1 => 'comment_default_mode_mailhandler_source',
                2 => 'comment_default_per_page_mailhandler_source',
                3 => 'comment_form_location_mailhandler_source',
                4 => 'comment_mailhandler_source',
                5 => 'comment_preview_mailhandler_source',
                6 => 'comment_subject_field_mailhandler_source',
                7 => 'menu_options_mailhandler_source',
                8 => 'menu_parent_mailhandler_source',
                9 => 'node_options_mailhandler_source',
                10 => 'node_preview_mailhandler_source',
                11 => 'node_submitted_mailhandler_source',
              ),
            ),
            'name' => 'Mailhandler quick-start',
            'package' => 'Mailhandler',
            'version' => '7.x-2.9',
            'project' => 'mailhandler',
            'datestamp' => '1379695939',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'mailhandler_multiple_email' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/mailhandler/modules/mailhandler_multiple_email/mailhandler_multiple_email.module',
          'basename' => 'mailhandler_multiple_email.module',
          'name' => 'mailhandler_multiple_email',
          'info' => 
          array (
            'name' => 'Mailhandler Multiple Email support',
            'description' => 'Allows Mailhandler to work with the Multiple Email module.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'mailhandler',
              1 => 'multiple_email',
            ),
            'package' => 'Mailhandler',
            'files' => 
            array (
              0 => 'plugins/mailhandler/authenticate/MailhandlerMultipleEmailAuthenticate.class.php',
            ),
            'version' => '7.x-2.9',
            'project' => 'mailhandler',
            'datestamp' => '1379695939',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'mailhandler_extended' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/mailhandler/modules/mailhandler_extended/mailhandler_extended.module',
          'basename' => 'mailhandler_extended.module',
          'name' => 'mailhandler_extended',
          'info' => 
          array (
            'name' => 'Mailhandler Extended Headers',
            'description' => 'Allows arbitrary headers to be mapped in Mailhandler',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'mailhandler',
            ),
            'package' => 'Mailhandler',
            'files' => 
            array (
              0 => 'plugins/mailhandler/commands/MailhandlerCommandsExtendedHeaders.class.php',
            ),
            'version' => '7.x-2.9',
            'project' => 'mailhandler',
            'datestamp' => '1379695939',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'mailhandler_tokenauth' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/mailhandler/modules/mailhandler_tokenauth/mailhandler_tokenauth.module',
          'basename' => 'mailhandler_tokenauth.module',
          'name' => 'mailhandler_tokenauth',
          'info' => 
          array (
            'name' => 'Mailhandler Tokenauth support',
            'description' => 'Allows Mailhandler to work with the Tokenauth module.',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'mailhandler',
              1 => 'tokenauth',
            ),
            'package' => 'Mailhandler',
            'files' => 
            array (
              0 => 'plugins/mailhandler/authenticate/MailhandlerAuthenticateTokenauth.class.php',
            ),
            'version' => '7.x-2.9',
            'project' => 'mailhandler',
            'datestamp' => '1379695939',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.9',
        ),
        'mailhandler' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/mailhandler/mailhandler.module',
          'basename' => 'mailhandler.module',
          'name' => 'mailhandler',
          'info' => 
          array (
            'name' => 'Mailhandler',
            'description' => 'Accepts submissions via e-mail. Requires at least one retrieval plugin (the Mailhandler PHP IMAP module is recommended).',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'feeds',
              2 => 'system (>=7.8)',
            ),
            'package' => 'Mailhandler',
            'configure' => 'admin/structure/mailhandler',
            'files' => 
            array (
              0 => 'mailhandler.install',
              1 => 'mailhandler.module',
              2 => 'tests/mailhandler.test',
              3 => 'plugins/ctools/export_ui/mailhandler.inc',
              4 => 'plugins/ctools/export_ui/mailhandler_mailbox_ui.class.php',
              5 => 'plugins/feeds/plugins/MailhandlerFetcher.class.php',
              6 => 'plugins/feeds/plugins/MailhandlerFetcher.inc',
              7 => 'plugins/feeds/plugins/MailhandlerParser.class.php',
              8 => 'plugins/feeds/plugins/MailhandlerParser.inc',
              9 => 'plugins/mailhandler/authenticate/MailhandlerAuthenticate.class.php',
              10 => 'plugins/mailhandler/authenticate/MailhandlerAuthenticate.inc',
              11 => 'plugins/mailhandler/authenticate/MailhandlerAuthenticateDefault.class.php',
              12 => 'plugins/mailhandler/authenticate/MailhandlerAuthenticateDefault.inc',
              13 => 'plugins/mailhandler/commands/MailhandlerCommands.class.php',
              14 => 'plugins/mailhandler/commands/MailhandlerCommands.inc',
              15 => 'plugins/mailhandler/commands/MailhandlerCommandsDefault.class.php',
              16 => 'plugins/mailhandler/commands/MailhandlerCommandsDefault.inc',
              17 => 'plugins/mailhandler/commands/MailhandlerCommandsFiles.class.php',
              18 => 'plugins/mailhandler/commands/MailhandlerCommandsFiles.inc',
              19 => 'plugins/mailhandler/commands/MailhandlerCommandsHeaders.class.php',
              20 => 'plugins/mailhandler/commands/MailhandlerCommandsHeaders.inc',
              21 => 'plugins/mailhandler/filters/MailhandlerFilters.class.php',
              22 => 'plugins/mailhandler/filters/MailhandlerFilters.inc',
              23 => 'plugins/mailhandler/filters/MailhandlerFiltersComments.class.php',
              24 => 'plugins/mailhandler/filters/MailhandlerFiltersComments.inc',
              25 => 'plugins/mailhandler/filters/MailhandlerFiltersNodes.class.php',
              26 => 'plugins/mailhandler/filters/MailhandlerFiltersNodes.inc',
              27 => 'plugins/mailhandler/retrieve/MailhandlerRetrieve.class.php',
              28 => 'plugins/mailhandler/retrieve/MailhandlerRetrieve.inc',
              29 => 'plugins/mailhandler/retrieve/MailhandlerRetrieveDummy.class.php',
              30 => 'plugins/mailhandler/retrieve/MailhandlerRetrieveDummy.inc',
            ),
            'version' => '7.x-2.9',
            'project' => 'mailhandler',
            'datestamp' => '1379695939',
            'php' => '5.2.4',
          ),
          'schema_version' => '7212',
          'version' => '7.x-2.9',
        ),
        'message_example' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/message/message_example/message_example.module',
          'basename' => 'message_example.module',
          'name' => 'message_example',
          'info' => 
          array (
            'name' => 'Message example',
            'description' => 'Message example.',
            'core' => '7.x',
            'package' => 'Message',
            'php' => '5.2.4',
            'dependencies' => 
            array (
              0 => 'entity_token',
              1 => 'entityreference',
              2 => 'features',
              3 => 'list',
              4 => 'message',
              5 => 'strongarm',
              6 => 'token',
              7 => 'views',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/message_example.css',
              ),
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'strongarm:strongarm:1',
                1 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:1',
              ),
              'field' => 
              array (
                0 => 'message-example_create_comment-field_comment_ref',
                1 => 'message-example_create_comment-field_node_ref',
                2 => 'message-example_create_comment-field_published',
                3 => 'message-example_create_node-field_node_ref',
                4 => 'message-example_create_node-field_published',
                5 => 'message-example_user_register-field_published',
              ),
              'message_type' => 
              array (
                0 => 'example_create_comment',
                1 => 'example_create_node',
                2 => 'example_user_register',
              ),
              'variable' => 
              array (
                0 => 'field_bundle_settings_message__example_create_comment',
                1 => 'field_bundle_settings_message__example_create_node',
                2 => 'field_bundle_settings_message__example_user_register',
              ),
              'views_view' => 
              array (
                0 => 'message_example',
              ),
            ),
            'version' => '7.x-1.10-dev',
            'project' => 'message',
            'datestamp' => '1447964466',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.10-dev',
        ),
        'message_og_example' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/message/message_og_example/message_og_example.module',
          'basename' => 'message_og_example.module',
          'name' => 'message_og_example',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'entityreference',
              1 => 'features',
              2 => 'list',
              3 => 'message',
              4 => 'message_example',
              5 => 'og',
              6 => 'views',
            ),
            'description' => 'Message integration with Organic groups example.',
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'views:views_default:3.0',
              ),
              'field' => 
              array (
                0 => 'message-example_og_post_in_group-field_node_groups_ref',
                1 => 'message-example_og_post_in_group-field_node_ref',
                2 => 'message-example_og_post_in_group-field_published',
                3 => 'message-example_og_user_membership-field_node_groups_ref',
                4 => 'message-example_og_user_membership-field_published',
              ),
              'message_type' => 
              array (
                0 => 'example_og_post_in_group',
                1 => 'example_og_user_membership',
              ),
              'views_view' => 
              array (
                0 => 'message_og_example',
              ),
            ),
            'name' => 'Message OG example',
            'package' => 'Message',
            'php' => '5.2.4',
            'version' => '7.x-1.10-dev',
            'project' => 'message',
            'datestamp' => '1447964466',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.10-dev',
        ),
        'message' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/message/message.module',
          'basename' => 'message.module',
          'name' => 'message',
          'info' => 
          array (
            'name' => 'Message',
            'description' => 'A general message logging utility.',
            'core' => '7.x',
            'package' => 'Message',
            'dependencies' => 
            array (
              0 => 'entity',
            ),
            'files' => 
            array (
              0 => 'message.info.inc',
              1 => 'includes/message.admin.inc',
              2 => 'includes/message.exception.inc',
              3 => 'includes/message.message_type_category.inc',
              4 => 'includes/message.message_type.inc',
              5 => 'includes/message.message.inc',
              6 => 'message.test',
              7 => 'includes/views/message.views.inc',
              8 => 'includes/views/handlers/message_handler_field_message_render.inc',
              9 => 'includes/views/handlers/message_handler_filter_message_type.inc',
              10 => 'includes/views/handlers/message_handler_filter_message_type_category.inc',
            ),
            'version' => '7.x-1.10-dev',
            'project' => 'message',
            'datestamp' => '1447964466',
            'php' => '5.2.4',
          ),
          'schema_version' => '7012',
          'version' => '7.x-1.10-dev',
        ),
        'panels_customerror' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/panels_customerror/panels_customerror.module',
          'basename' => 'panels_customerror.module',
          'name' => 'panels_customerror',
          'info' => 
          array (
            'name' => 'Panels Customerror',
            'description' => 'Replaces access denied/page not found with panel pages',
            'core' => '7.x',
            'package' => 'Panels',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'page_manager',
              2 => 'panels',
              3 => 'strongarm',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'strongarm:strongarm:1',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'page_manager_pages' => 
              array (
                0 => 'panels_customerror_403',
                1 => 'panels_customerror_404',
              ),
              'variable' => 
              array (
                0 => 'site_403',
                1 => 'site_404',
              ),
            ),
            'project path' => 'sites/all/modules/',
            'version' => '7.x-1.0',
            'project' => 'panels_customerror',
            'datestamp' => '1392840523',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0',
        ),
        'file_entity' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/file_entity/file_entity.module',
          'basename' => 'file_entity.module',
          'name' => 'file_entity',
          'info' => 
          array (
            'name' => 'File Entity',
            'description' => 'Extends Drupal file entities to be fieldable and viewable.',
            'package' => 'Media',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'file',
              2 => 'ctools',
              3 => 'system (>=7.9)',
            ),
            'test_dependencies' => 
            array (
              0 => 'token',
            ),
            'files' => 
            array (
              0 => 'views/views_handler_argument_file_type.inc',
              1 => 'views/views_handler_field_file_rendered.inc',
              2 => 'views/views_handler_field_file_type.inc',
              3 => 'views/views_handler_filter_file_type.inc',
              4 => 'views/views_handler_filter_schema_type.inc',
              5 => 'views/views_handler_field_file_filename.inc',
              6 => 'views/views_handler_field_file_link.inc',
              7 => 'views/views_handler_field_file_link_edit.inc',
              8 => 'views/views_handler_field_file_link_delete.inc',
              9 => 'views/views_handler_field_file_link_download.inc',
              10 => 'views/views_handler_field_file_link_usage.inc',
              11 => 'views/views_plugin_row_file_rss.inc',
              12 => 'views/views_plugin_row_file_view.inc',
              13 => 'file_entity.test',
            ),
            'configure' => 'admin/config/media/file-settings',
            'version' => '7.x-2.0-beta2',
            'project' => 'file_entity',
            'datestamp' => '1436896443',
            'php' => '5.2.4',
          ),
          'schema_version' => '7216',
          'version' => '7.x-2.0-beta2',
        ),
        'fape' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/fape/fape.module',
          'basename' => 'fape.module',
          'name' => 'fape',
          'info' => 
          array (
            'name' => 'Field API Pane Editor',
            'description' => 'Adds a contextual link to Field API Panel Panes to edit that field value.',
            'core' => '7.x',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'ctools (>=1.4)',
              1 => 'entity',
            ),
            'version' => '7.x-1.2',
            'project' => 'fape',
            'datestamp' => '1398870831',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.2',
        ),
        'diff' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/diff/diff.module',
          'basename' => 'diff.module',
          'name' => 'diff',
          'info' => 
          array (
            'name' => 'Diff',
            'description' => 'Show differences between content revisions.',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'DiffEngine.php',
            ),
            'version' => '7.x-3.2',
            'project' => 'diff',
            'datestamp' => '1352784357',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7305',
          'version' => '7.x-3.2',
        ),
        'job_scheduler_trigger' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/job_scheduler/modules/job_scheduler_trigger/job_scheduler_trigger.module',
          'basename' => 'job_scheduler_trigger.module',
          'name' => 'job_scheduler_trigger',
          'info' => 
          array (
            'name' => 'Job Scheduler Trigger',
            'description' => 'Creates scheduler triggers that fire up at certain days, times',
            'core' => '7.x',
            'php' => '5.2',
            'dependencies' => 
            array (
              0 => 'job_scheduler',
            ),
            'version' => '7.x-2.0-alpha3',
            'project' => 'job_scheduler',
            'datestamp' => '1336466457',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0-alpha3',
        ),
        'job_scheduler' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/job_scheduler/job_scheduler.module',
          'basename' => 'job_scheduler.module',
          'name' => 'job_scheduler',
          'info' => 
          array (
            'name' => 'Job Scheduler',
            'description' => 'Scheduler API',
            'files' => 
            array (
              0 => 'job_scheduler.module',
              1 => 'job_scheduler.install',
              2 => 'JobScheduler.inc',
              3 => 'JobSchedulerCronTab.inc',
            ),
            'core' => '7.x',
            'php' => '5.2',
            'version' => '7.x-2.0-alpha3',
            'project' => 'job_scheduler',
            'datestamp' => '1336466457',
            'dependencies' => 
            array (
            ),
          ),
          'schema_version' => '7101',
          'version' => '7.x-2.0-alpha3',
        ),
        'field_group' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/field_group/field_group.module',
          'basename' => 'field_group.module',
          'name' => 'field_group',
          'info' => 
          array (
            'name' => 'Field Group',
            'description' => 'Provides the ability to group your fields on both form and display.',
            'package' => 'Fields',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'ctools',
            ),
            'core' => '7.x',
            'files' => 
            array (
              0 => 'tests/field_group.ui.test',
              1 => 'tests/field_group.display.test',
            ),
            'version' => '7.x-1.4',
            'project' => 'field_group',
            'datestamp' => '1401918529',
            'php' => '5.2.4',
          ),
          'schema_version' => '7007',
          'version' => '7.x-1.4',
        ),
        'uuid_services' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/uuid/uuid_services/uuid_services.module',
          'basename' => 'uuid_services.module',
          'name' => 'uuid_services',
          'info' => 
          array (
            'name' => 'UUID Services',
            'description' => 'Provides integration with the Services module, like exposing a UUID entity resource.',
            'core' => '7.x',
            'package' => 'Services - resources',
            'dependencies' => 
            array (
              0 => 'services',
              1 => 'uuid',
              2 => 'entity',
            ),
            'version' => '7.x-1.0-alpha6',
            'project' => 'uuid',
            'datestamp' => '1411455150',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-alpha6',
        ),
        'uuid_path' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/uuid/uuid_path/uuid_path.module',
          'basename' => 'uuid_path.module',
          'name' => 'uuid_path',
          'info' => 
          array (
            'name' => 'UUID Path',
            'description' => 'Provides export functionality for url aliases.',
            'core' => '7.x',
            'package' => 'UUID',
            'dependencies' => 
            array (
              0 => 'uuid',
            ),
            'version' => '7.x-1.0-alpha6',
            'project' => 'uuid',
            'datestamp' => '1411455150',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-alpha6',
        ),
        'uuid_services_example' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/uuid/uuid_services_example/uuid_services_example.module',
          'basename' => 'uuid_services_example.module',
          'name' => 'uuid_services_example',
          'info' => 
          array (
            'name' => 'UUID Services Example',
            'description' => 'Example feature of a UUID service. Works well with the Deploy Example feature as a client.',
            'core' => '7.x',
            'package' => 'Features',
            'php' => '5.2.4',
            'dependencies' => 
            array (
              0 => 'rest_server',
              1 => 'services',
              2 => 'uuid',
              3 => 'uuid_services',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'services:services:3',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'services_endpoint' => 
              array (
                0 => 'uuid_services_example',
              ),
            ),
            'version' => '7.x-1.0-alpha6',
            'project' => 'uuid',
            'datestamp' => '1411455150',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-alpha6',
        ),
        'uuid' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/uuid/uuid.module',
          'basename' => 'uuid.module',
          'name' => 'uuid',
          'info' => 
          array (
            'name' => 'Universally Unique ID',
            'description' => 'Extends the entity functionality and adds support for universally unique identifiers.',
            'core' => '7.x',
            'package' => 'UUID',
            'configure' => 'admin/config/system/uuid',
            'files' => 
            array (
              0 => 'uuid.test',
            ),
            'dependencies' => 
            array (
              0 => 'node',
              1 => 'user',
            ),
            'version' => '7.x-1.0-alpha6',
            'project' => 'uuid',
            'datestamp' => '1411455150',
            'php' => '5.2.4',
          ),
          'schema_version' => '7103',
          'version' => '7.x-1.0-alpha6',
        ),
        'features_override' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/features_override/features_override.module',
          'basename' => 'features_override.module',
          'name' => 'features_override',
          'info' => 
          array (
            'name' => 'Features Override',
            'description' => 'Allows exported Features to be overridden',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'features',
            ),
            'package' => 'Features',
            'version' => '7.x-2.0-rc3',
            'project' => 'features_override',
            'datestamp' => '1444843045',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0-rc3',
        ),
        'admin_devel' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/admin_menu/admin_devel/admin_devel.module',
          'basename' => 'admin_devel.module',
          'name' => 'admin_devel',
          'info' => 
          array (
            'name' => 'Administration Development tools',
            'description' => 'Administration and debugging functionality for developers and site builders.',
            'package' => 'Administration',
            'core' => '7.x',
            'scripts' => 
            array (
              0 => 'admin_devel.js',
            ),
            'version' => '7.x-3.0-rc5',
            'project' => 'admin_menu',
            'datestamp' => '1419029284',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-3.0-rc5',
        ),
        'admin_menu_toolbar' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
          'basename' => 'admin_menu_toolbar.module',
          'name' => 'admin_menu_toolbar',
          'info' => 
          array (
            'name' => 'Administration menu Toolbar style',
            'description' => 'A better Toolbar.',
            'package' => 'Administration',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'admin_menu',
            ),
            'version' => '7.x-3.0-rc5',
            'project' => 'admin_menu',
            'datestamp' => '1419029284',
            'php' => '5.2.4',
          ),
          'schema_version' => '6300',
          'version' => '7.x-3.0-rc5',
        ),
        'admin_menu' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/admin_menu/admin_menu.module',
          'basename' => 'admin_menu.module',
          'name' => 'admin_menu',
          'info' => 
          array (
            'name' => 'Administration menu',
            'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
            'package' => 'Administration',
            'core' => '7.x',
            'configure' => 'admin/config/administration/admin_menu',
            'dependencies' => 
            array (
              0 => 'system (>7.10)',
            ),
            'files' => 
            array (
              0 => 'tests/admin_menu.test',
            ),
            'version' => '7.x-3.0-rc5',
            'project' => 'admin_menu',
            'datestamp' => '1419029284',
            'php' => '5.2.4',
          ),
          'schema_version' => '7304',
          'version' => '7.x-3.0-rc5',
        ),
        'trash_flag' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/trash_flag/trash_flag.module',
          'basename' => 'trash_flag.module',
          'name' => 'trash_flag',
          'info' => 
          array (
            'name' => 'Trash Flag',
            'description' => 'Provides a trashbin functionality using the flag module',
            'core' => '7.x',
            'package' => 'Flags',
            'dependencies' => 
            array (
              0 => 'flag',
              1 => 'og_context',
              2 => 'views',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'views:views_default:3.0',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'flag' => 
              array (
                0 => 'trash',
              ),
              'views_view' => 
              array (
                0 => 'trash_flag_bin',
              ),
            ),
            'features_exclude' => 
            array (
              'dependencies' => 
              array (
                'ctools' => 'ctools',
              ),
            ),
            'files' => 
            array (
              0 => 'trash_flag.test',
            ),
            'project path' => 'sites/all/modules',
            'version' => '7.x-1.0-beta5',
            'project' => 'trash_flag',
            'datestamp' => '1446650343',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta5',
        ),
        'migrate_extras_profile2' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/migrate_extras/migrate_extras_examples/migrate_extras_profile2/migrate_extras_profile2.module',
          'basename' => 'migrate_extras_profile2.module',
          'name' => 'migrate_extras_profile2',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'migrate_extras',
              1 => 'profile2',
            ),
            'description' => 'Examples of migrating into Profile2 entities',
            'files' => 
            array (
              0 => 'migrate_extras_profile2.migrate.inc',
            ),
            'name' => 'Migrate Extras Profile2 Example',
            'package' => 'Migrate Examples',
            'version' => '7.x-2.5',
            'project' => 'migrate_extras',
            'datestamp' => '1352299013',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'migrate_extras_media' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/migrate_extras/migrate_extras_examples/migrate_extras_media/migrate_extras_media.module',
          'basename' => 'migrate_extras_media.module',
          'name' => 'migrate_extras_media',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'file',
              2 => 'media',
              3 => 'media_youtube',
              4 => 'migrate',
              5 => 'migrate_extras',
            ),
            'description' => 'Examples for migrating Media',
            'features' => 
            array (
              'field' => 
              array (
                0 => 'node-migrate_extras_media_example-body',
                1 => 'node-migrate_extras_media_example-field_document',
                2 => 'node-migrate_extras_media_example-field_media_image',
                3 => 'node-migrate_extras_media_example-field_youtube_video',
              ),
              'node' => 
              array (
                0 => 'migrate_extras_media_example',
              ),
            ),
            'files' => 
            array (
              0 => 'migrate_extras_media.migrate.inc',
            ),
            'name' => 'Migrate Extras Media',
            'package' => 'Migrate Examples',
            'version' => '7.x-2.5',
            'project' => 'migrate_extras',
            'datestamp' => '1352299013',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'migrate_extras_pathauto' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/migrate_extras/migrate_extras_examples/migrate_extras_pathauto/migrate_extras_pathauto.module',
          'basename' => 'migrate_extras_pathauto.module',
          'name' => 'migrate_extras_pathauto',
          'info' => 
          array (
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'features',
              1 => 'migrate_extras',
              2 => 'pathauto',
            ),
            'description' => 'Examples of migrating with the Pathauto module',
            'features' => 
            array (
              'field' => 
              array (
                0 => 'node-migrate_example_pathauto-body',
              ),
              'node' => 
              array (
                0 => 'migrate_example_pathauto',
              ),
            ),
            'files' => 
            array (
              0 => 'migrate_extras_pathauto.migrate.inc',
            ),
            'name' => 'Migrate Extras Pathauto Example',
            'package' => 'Migrate Examples',
            'project' => 'migrate_extras',
            'version' => '7.x-2.5',
            'datestamp' => '1352299013',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'migrate_extras' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/migrate_extras/migrate_extras.module',
          'basename' => 'migrate_extras.module',
          'name' => 'migrate_extras',
          'info' => 
          array (
            'name' => 'Migrate Extras',
            'description' => 'Adds migrate module integration with contrib modules and other miscellaneous tweaks.',
            'core' => '7.x',
            'package' => 'Development',
            'dependencies' => 
            array (
              0 => 'migrate',
            ),
            'files' => 
            array (
              0 => 'addressfield.inc',
              1 => 'cck_phone.inc',
              2 => 'entity_api.inc',
              3 => 'flag.inc',
              4 => 'geofield.inc',
              5 => 'interval.inc',
              6 => 'media.inc',
              7 => 'name.inc',
              8 => 'pathauto.inc',
              9 => 'privatemsg.inc',
              10 => 'profile2.inc',
              11 => 'rules.inc',
              12 => 'user_relationships.inc',
              13 => 'votingapi.inc',
              14 => 'webform.inc',
              15 => 'tests/pathauto.test',
            ),
            'version' => '7.x-2.5',
            'project' => 'migrate_extras',
            'datestamp' => '1352299013',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.5',
        ),
        'breakpoints' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/breakpoints/breakpoints.module',
          'basename' => 'breakpoints.module',
          'name' => 'breakpoints',
          'info' => 
          array (
            'name' => 'Breakpoints',
            'description' => 'Manage breakpoints',
            'core' => '7.x',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'files' => 
            array (
              0 => 'breakpoints.module',
              1 => 'breakpoints.test',
            ),
            'configure' => 'admin/config/media/breakpoints',
            'version' => '7.x-1.3',
            'project' => 'breakpoints',
            'datestamp' => '1407507528',
            'php' => '5.2.4',
          ),
          'schema_version' => '7102',
          'version' => '7.x-1.3',
        ),
        'admin' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/admin/admin.module',
          'basename' => 'admin.module',
          'name' => 'admin',
          'info' => 
          array (
            'name' => 'Admin',
            'description' => 'UI helpers for Drupal admins and managers.',
            'package' => 'Administration',
            'core' => '7.x',
            'files' => 
            array (
              0 => 'admin.admin.inc',
              1 => 'admin.install',
              2 => 'admin.module',
              3 => 'includes/admin.devel.inc',
              4 => 'includes/admin.theme.inc',
              5 => 'theme/admin-panes.tpl.php',
              6 => 'theme/admin-toolbar.tpl.php',
              7 => 'theme/theme.inc',
            ),
            'version' => '7.x-2.0-beta3',
            'project' => 'admin',
            'datestamp' => '1292541646',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-2.0-beta3',
        ),
        'oa_responsive_regions' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/oa_responsive_regions/oa_responsive_regions.module',
          'basename' => 'oa_responsive_regions.module',
          'name' => 'oa_responsive_regions',
          'info' => 
          array (
            'name' => 'OA Responsive Regions',
            'description' => 'Let\'s you define responsive Panels regions.',
            'core' => '7.x',
            'package' => 'Open Atrium',
            'version' => '7.x-1.0-beta1',
            'project' => 'oa_responsive_regions',
            'datestamp' => '1382472315',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.0-beta1',
        ),
        'fasttoggle_comment' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/fasttoggle/module/fasttoggle_comment/fasttoggle_comment.module',
          'basename' => 'fasttoggle_comment.module',
          'name' => 'fasttoggle_comment',
          'info' => 
          array (
            'name' => 'Fasttoggle Comment',
            'description' => 'Enables fast toggling of binary settings for comments.',
            'version' => '7.x-1.6',
            'package' => 'Administration',
            'files' => 
            array (
              0 => 'views/fasttoggle_comment.views.inc',
              1 => 'views/fasttoggle_comment_views_handler_field_comment_link.inc',
            ),
            'core' => '7.x',
            'configure' => 'admin/config/system/fasttoggle',
            'dependencies' => 
            array (
              0 => 'fasttoggle_node',
              1 => 'comment',
            ),
            'project' => 'fasttoggle',
            'datestamp' => '1410299043',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.6',
        ),
        'fasttoggle_node' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/fasttoggle/module/fasttoggle_node/fasttoggle_node.module',
          'basename' => 'fasttoggle_node.module',
          'name' => 'fasttoggle_node',
          'info' => 
          array (
            'name' => 'Fasttoggle Node',
            'description' => 'Enables fast toggling of binary settings for nodes.',
            'version' => '7.x-1.6',
            'package' => 'Administration',
            'files' => 
            array (
              0 => 'views/fasttoggle_node.views.inc',
              1 => 'views/fasttoggle_node_views_handler_field_node_link.inc',
            ),
            'core' => '7.x',
            'configure' => 'admin/config/system/fasttoggle',
            'dependencies' => 
            array (
              0 => 'fasttoggle',
            ),
            'project' => 'fasttoggle',
            'datestamp' => '1410299043',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.6',
        ),
        'fasttoggle_field' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/fasttoggle/module/fasttoggle_field/fasttoggle_field.module',
          'basename' => 'fasttoggle_field.module',
          'name' => 'fasttoggle_field',
          'info' => 
          array (
            'name' => 'Fasttoggle Field',
            'description' => 'Enables fast toggling of binary settings for fields.',
            'version' => '7.x-1.6',
            'package' => 'Administration',
            'files' => 
            array (
              0 => 'views/fasttoggle_field.views.inc',
              1 => 'views/fasttoggle_field_views_handler_field_field_link.inc',
            ),
            'core' => '7.x',
            'configure' => 'admin/config/system/fasttoggle',
            'dependencies' => 
            array (
              0 => 'fasttoggle',
              1 => 'field',
            ),
            'project' => 'fasttoggle',
            'datestamp' => '1410299043',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.6',
        ),
        'fasttoggle_user' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/fasttoggle/module/fasttoggle_user/fasttoggle_user.module',
          'basename' => 'fasttoggle_user.module',
          'name' => 'fasttoggle_user',
          'info' => 
          array (
            'name' => 'Fasttoggle User',
            'description' => 'Enables fast toggling of binary settings for users.',
            'version' => '7.x-1.6',
            'package' => 'Administration',
            'files' => 
            array (
              0 => 'views/fasttoggle_user.views.inc',
              1 => 'views/fasttoggle_user_views_handler_field_user_link.inc',
            ),
            'core' => '7.x',
            'configure' => 'admin/config/system/fasttoggle',
            'dependencies' => 
            array (
              0 => 'fasttoggle',
            ),
            'project' => 'fasttoggle',
            'datestamp' => '1410299043',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.6',
        ),
        'fasttoggle_modr8' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/fasttoggle/module/fasttoggle_modr8/fasttoggle_modr8.module',
          'basename' => 'fasttoggle_modr8.module',
          'name' => 'fasttoggle_modr8',
          'info' => 
          array (
            'name' => 'Fasttoggle Modr8',
            'description' => 'Enables fast toggling of modr8 settings for nodes.',
            'version' => '7.x-1.6',
            'package' => 'Administration',
            'files' => 
            array (
              0 => 'views/fasttoggle_modr8.views.inc',
            ),
            'core' => '7.x',
            'configure' => 'admin/config/system/fasttoggle',
            'dependencies' => 
            array (
              0 => 'fasttoggle_comment',
              1 => 'modr8',
            ),
            'project' => 'fasttoggle',
            'datestamp' => '1410299043',
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'version' => '7.x-1.6',
        ),
        'fasttoggle' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/contrib/fasttoggle/fasttoggle.module',
          'basename' => 'fasttoggle.module',
          'name' => 'fasttoggle',
          'info' => 
          array (
            'name' => 'Fasttoggle',
            'description' => 'Enables fast toggling of binary settings.',
            'version' => '7.x-1.6',
            'package' => 'Administration',
            'files' => 
            array (
              0 => 'fasttoggle.admin.inc',
            ),
            'core' => '7.x',
            'configure' => 'admin/config/system/fasttoggle',
            'project' => 'fasttoggle',
            'datestamp' => '1410299043',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => '7000',
          'version' => '7.x-1.6',
        ),
        'panopoly_theme' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/panopoly/panopoly_theme/panopoly_theme.module',
          'basename' => 'panopoly_theme.module',
          'name' => 'panopoly_theme',
          'info' => 
          array (
            'name' => 'Panopoly Theme',
            'description' => 'Helps with theming and provides many layouts.',
            'core' => '7.x',
            'package' => 'Panopoly',
            'project' => 'panopoly_theme',
            'dependencies' => 
            array (
              0 => 'panels',
              1 => 'radix_layouts',
            ),
            'scripts' => 
            array (
              0 => 'js/panopoly-accordion.js',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/panopoly-featured.css',
                1 => 'css/panopoly-accordian.css',
                2 => 'css/panopoly-layouts.css',
              ),
            ),
            'features' => 
            array (
              'features_api' => 
              array (
                0 => 'api:2',
              ),
            ),
            'version' => '7.x-1.29',
            'datestamp' => '1447888153',
            'php' => '5.2.4',
          ),
          'schema_version' => '7003',
          'version' => '7.x-1.29',
        ),
        'panopoly_widgets' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/panopoly/panopoly_widgets/panopoly_widgets.module',
          'basename' => 'panopoly_widgets.module',
          'name' => 'panopoly_widgets',
          'info' => 
          array (
            'name' => 'Panopoly Widgets',
            'description' => 'Creates generic widget functionality to customize wide and far.',
            'core' => '7.x',
            'package' => 'Panopoly',
            'project' => 'panopoly_widgets',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'defaultconfig',
              2 => 'features',
              3 => 'fieldable_panels_panes',
              4 => 'file',
              5 => 'file_entity',
              6 => 'image',
              7 => 'link',
              8 => 'list',
              9 => 'media',
              10 => 'media_vimeo',
              11 => 'media_youtube',
              12 => 'menu_block',
              13 => 'number',
              14 => 'options',
              15 => 'page_manager',
              16 => 'simple_gmap',
              17 => 'tablefield',
              18 => 'text',
              19 => 'views',
              20 => 'views_autocomplete_filters',
              21 => 'views_content',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'panopoly-widgets.css',
                1 => 'panopoly-widgets-spotlight.css',
              ),
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'file_entity:file_default_displays:1',
                1 => 'views:views_default:3.0',
              ),
              'defaultconfig' => 
              array (
                0 => 'strongarm:media_wysiwyg_default_render',
                1 => 'user_default_permissions:access media browser',
                2 => 'user_default_permissions:add media from remote sources',
                3 => 'user_default_permissions:create fieldable basic_file',
                4 => 'user_default_permissions:create fieldable image',
                5 => 'user_default_permissions:create fieldable map',
                6 => 'user_default_permissions:create fieldable quick_links',
                7 => 'user_default_permissions:create fieldable spotlight',
                8 => 'user_default_permissions:create fieldable table',
                9 => 'user_default_permissions:create fieldable text',
                10 => 'user_default_permissions:create fieldable video',
                11 => 'user_default_permissions:create files',
                12 => 'user_default_permissions:delete any audio files',
                13 => 'user_default_permissions:delete any document files',
                14 => 'user_default_permissions:delete any image files',
                15 => 'user_default_permissions:delete any video files',
                16 => 'user_default_permissions:delete fieldable basic_file',
                17 => 'user_default_permissions:delete fieldable image',
                18 => 'user_default_permissions:delete fieldable map',
                19 => 'user_default_permissions:delete fieldable quick_links',
                20 => 'user_default_permissions:delete fieldable spotlight',
                21 => 'user_default_permissions:delete fieldable table',
                22 => 'user_default_permissions:delete fieldable text',
                23 => 'user_default_permissions:delete fieldable video',
                24 => 'user_default_permissions:delete own audio files',
                25 => 'user_default_permissions:delete own document files',
                26 => 'user_default_permissions:delete own image files',
                27 => 'user_default_permissions:delete own video files',
                28 => 'user_default_permissions:download any audio files',
                29 => 'user_default_permissions:download any document files',
                30 => 'user_default_permissions:download any image files',
                31 => 'user_default_permissions:download any video files',
                32 => 'user_default_permissions:download own audio files',
                33 => 'user_default_permissions:download own document files',
                34 => 'user_default_permissions:download own image files',
                35 => 'user_default_permissions:download own video files',
                36 => 'user_default_permissions:edit any audio files',
                37 => 'user_default_permissions:edit any document files',
                38 => 'user_default_permissions:edit any image files',
                39 => 'user_default_permissions:edit any video files',
                40 => 'user_default_permissions:edit fieldable basic_file',
                41 => 'user_default_permissions:edit fieldable image',
                42 => 'user_default_permissions:edit fieldable map',
                43 => 'user_default_permissions:edit fieldable quick_links',
                44 => 'user_default_permissions:edit fieldable spotlight',
                45 => 'user_default_permissions:edit fieldable table',
                46 => 'user_default_permissions:edit fieldable text',
                47 => 'user_default_permissions:edit fieldable video',
                48 => 'user_default_permissions:edit own audio files',
                49 => 'user_default_permissions:edit own document files',
                50 => 'user_default_permissions:edit own image files',
                51 => 'user_default_permissions:edit own video files',
                52 => 'user_default_permissions:view files',
                53 => 'user_default_permissions:view own files',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_basic_file_file',
                1 => 'field_basic_file_text',
                2 => 'field_basic_image_caption',
                3 => 'field_basic_image_image',
                4 => 'field_basic_spotlight_duration',
                5 => 'field_basic_spotlight_items',
                6 => 'field_basic_spotlight_pager',
                7 => 'field_basic_table_table',
                8 => 'field_basic_text_text',
                9 => 'field_map_address',
                10 => 'field_map_information',
                11 => 'field_quick_links_links',
                12 => 'field_video_file',
              ),
              'field_instance' => 
              array (
                0 => 'fieldable_panels_pane-basic_file-field_basic_file_file',
                1 => 'fieldable_panels_pane-basic_file-field_basic_file_text',
                2 => 'fieldable_panels_pane-image-field_basic_image_caption',
                3 => 'fieldable_panels_pane-image-field_basic_image_image',
                4 => 'fieldable_panels_pane-map-field_map_address',
                5 => 'fieldable_panels_pane-map-field_map_information',
                6 => 'fieldable_panels_pane-quick_links-field_quick_links_links',
                7 => 'fieldable_panels_pane-spotlight-field_basic_spotlight_duration',
                8 => 'fieldable_panels_pane-spotlight-field_basic_spotlight_items',
                9 => 'fieldable_panels_pane-spotlight-field_basic_spotlight_pager',
                10 => 'fieldable_panels_pane-table-field_basic_table_table',
                11 => 'fieldable_panels_pane-text-field_basic_text_text',
                12 => 'fieldable_panels_pane-video-field_video_file',
              ),
              'file_display' => 
              array (
                0 => 'video__default__media_vimeo_image',
                1 => 'video__default__media_youtube_image',
                2 => 'video__default__media_youtube_video',
                3 => 'video__link__file_field_file_default',
                4 => 'video__preview__media_youtube_image',
                5 => 'video__teaser__media_youtube_image',
                6 => 'video__teaser__media_youtube_video',
              ),
              'views_view' => 
              array (
                0 => 'panopoly_widgets_general_content',
              ),
            ),
            'version' => '7.x-1.29',
            'datestamp' => '1447888744',
            'php' => '5.2.4',
          ),
          'schema_version' => '7014',
          'version' => '7.x-1.29',
        ),
        'panopoly_images' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/panopoly/panopoly_images/panopoly_images.module',
          'basename' => 'panopoly_images.module',
          'name' => 'panopoly_images',
          'info' => 
          array (
            'name' => 'Panopoly Images',
            'description' => 'Provides scaling and cropping to images.',
            'core' => '7.x',
            'package' => 'Panopoly',
            'project' => 'panopoly_images',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'defaultconfig',
              2 => 'features',
              3 => 'file_entity',
              4 => 'image',
              5 => 'manualcrop',
              6 => 'media',
              7 => 'strongarm',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'file_entity:file_default_displays:1',
                1 => 'strongarm:strongarm:1',
              ),
              'defaultconfig' => 
              array (
                0 => 'strongarm:focal_point_enabled_for',
                1 => 'strongarm:manualcrop_file_entity_settings_image',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'file_display' => 
              array (
                0 => 'image__link__file_field_file_default',
              ),
              'image' => 
              array (
                0 => 'panopoly_image_featured',
                1 => 'panopoly_image_full',
                2 => 'panopoly_image_half',
                3 => 'panopoly_image_original',
                4 => 'panopoly_image_quarter',
                5 => 'panopoly_image_spotlight',
                6 => 'panopoly_image_square',
                7 => 'panopoly_image_thumbnail',
                8 => 'panopoly_image_video',
              ),
            ),
            'version' => '7.x-1.29',
            'datestamp' => '1447887589',
            'php' => '5.2.4',
          ),
          'schema_version' => '7103',
          'version' => '7.x-1.29',
        ),
        'panopoly_wysiwyg' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/panopoly/panopoly_wysiwyg/panopoly_wysiwyg.module',
          'basename' => 'panopoly_wysiwyg.module',
          'name' => 'panopoly_wysiwyg',
          'info' => 
          array (
            'name' => 'Panopoly WYSIWYG',
            'description' => 'Integrates a WYSIWYG into Drupal.',
            'core' => '7.x',
            'package' => 'Panopoly',
            'project' => 'panopoly_wysiwyg',
            'dependencies' => 
            array (
              0 => 'caption_filter',
              1 => 'ctools',
              2 => 'defaultconfig',
              3 => 'features',
              4 => 'filter',
              5 => 'image_resize_filter',
              6 => 'linkit',
              7 => 'media',
              8 => 'media_internet',
              9 => 'media_vimeo',
              10 => 'media_wysiwyg',
              11 => 'media_youtube',
              12 => 'strongarm',
              13 => 'wysiwyg',
              14 => 'wysiwyg_filter',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'panopoly-wysiwyg.css',
              ),
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'linkit:linkit_profiles:1',
                1 => 'strongarm:strongarm:1',
              ),
              'defaultconfig' => 
              array (
                0 => 'user_default_permissions:use text format panopoly_html_text',
                1 => 'user_default_permissions:use text format panopoly_wysiwyg_text',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'filter' => 
              array (
                0 => 'panopoly_html_text',
                1 => 'panopoly_wysiwyg_text',
              ),
              'linkit_profiles' => 
              array (
                0 => 'content_editors',
              ),
              'variable' => 
              array (
                0 => 'media_wysiwyg_wysiwyg_allowed_types',
                1 => 'media_wysiwyg_wysiwyg_browser_plugins',
              ),
              'wysiwyg' => 
              array (
                0 => 'panopoly_html_text',
                1 => 'panopoly_wysiwyg_text',
              ),
            ),
            'version' => '7.x-1.29',
            'datestamp' => '1447888752',
            'php' => '5.2.4',
          ),
          'schema_version' => '7103',
          'version' => '7.x-1.29',
        ),
        'panopoly_search' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/panopoly/panopoly_search/panopoly_search.module',
          'basename' => 'panopoly_search.module',
          'name' => 'panopoly_search',
          'info' => 
          array (
            'name' => 'Panopoly Search',
            'description' => 'Indexes and searches site content, Solr or otherwise.',
            'core' => '7.x',
            'package' => 'Panopoly',
            'project' => 'panopoly_search',
            'dependencies' => 
            array (
              0 => 'facetapi',
              1 => 'page_manager',
              2 => 'search',
              3 => 'search_api',
              4 => 'search_api_db',
              5 => 'search_api_facetapi',
              6 => 'search_api_solr',
              7 => 'search_api_views',
              8 => 'strongarm',
              9 => 'views',
              10 => 'views_content',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'facetapi:facetapi_defaults:1',
                1 => 'page_manager:pages_default:1',
                2 => 'strongarm:strongarm:1',
                3 => 'views:views_default:3.0',
              ),
              'facetapi' => 
              array (
                0 => 'search_api@database_node_index:block:author',
                1 => 'search_api@database_node_index:block:created',
                2 => 'search_api@database_node_index:block:search_api_language',
                3 => 'search_api@database_node_index:block:search_api_url',
                4 => 'search_api@database_node_index:block:search_api_viewed',
                5 => 'search_api@database_node_index:block:status',
                6 => 'search_api@database_node_index:block:title',
                7 => 'search_api@database_node_index:block:type',
                8 => 'search_api@database_node_index:block:url',
                9 => 'search_api@node_index:block:author',
                10 => 'search_api@node_index:block:body:summary',
                11 => 'search_api@node_index:block:body:value',
                12 => 'search_api@node_index:block:created',
                13 => 'search_api@node_index:block:field_tags',
                14 => 'search_api@node_index:block:nid',
                15 => 'search_api@node_index:block:search_api_language',
                16 => 'search_api@node_index:block:search_api_url',
                17 => 'search_api@node_index:block:search_api_viewed',
                18 => 'search_api@node_index:block:status',
                19 => 'search_api@node_index:block:title',
                20 => 'search_api@node_index:block:type',
                21 => 'search_api@node_index:block:url',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'page_manager_pages' => 
              array (
                0 => 'panopoly_search',
              ),
              'search_api_index' => 
              array (
                0 => 'database_node_index',
                1 => 'node_index',
              ),
              'search_api_server' => 
              array (
                0 => 'database_server',
                1 => 'solr_server',
              ),
              'variable' => 
              array (
                0 => 'facetapi:block_cache:search_api@database_node_index',
                1 => 'facetapi:block_cache:search_api@node_index',
                2 => 'search_active_modules',
                3 => 'search_api_facets_search_ids',
                4 => 'search_cron_limit',
              ),
              'views_view' => 
              array (
                0 => 'panopoly_database_search',
                1 => 'panopoly_search',
              ),
            ),
            'version' => '7.x-1.29',
            'datestamp' => '1447887858',
            'php' => '5.2.4',
          ),
          'schema_version' => '7008',
          'version' => '7.x-1.29',
        ),
        'panopoly_admin' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/panopoly/panopoly_admin/panopoly_admin.module',
          'basename' => 'panopoly_admin.module',
          'name' => 'panopoly_admin',
          'info' => 
          array (
            'name' => 'Panopoly Admin',
            'description' => 'Administrative dashboard and related editing interfaces.',
            'core' => '7.x',
            'package' => 'Panopoly',
            'project' => 'panopoly_admin',
            'dependencies' => 
            array (
              0 => 'admin_views',
              1 => 'ctools',
              2 => 'defaultconfig',
              3 => 'features',
              4 => 'jquery_update',
              5 => 'page_manager',
              6 => 'radix_layouts',
              7 => 'strongarm',
              8 => 'views_bulk_operations',
            ),
            'scripts' => 
            array (
              0 => 'panopoly-admin.js',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'panopoly-admin.css',
                1 => 'panopoly-admin-navbar.css',
              ),
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'strongarm:strongarm:1',
                2 => 'views:views_default:3.0',
              ),
              'defaultconfig' => 
              array (
                0 => 'strongarm:admin_toolbar',
                1 => 'strongarm:user_register',
                2 => 'user_default_permissions:access administration pages',
                3 => 'user_default_permissions:access content',
                4 => 'user_default_permissions:access content overview',
                5 => 'user_default_permissions:access navbar',
                6 => 'user_default_permissions:administer menu',
                7 => 'user_default_permissions:administer taxonomy',
                8 => 'user_default_permissions:delete revisions',
                9 => 'user_default_permissions:revert revisions',
                10 => 'user_default_permissions:save draft',
                11 => 'user_default_permissions:view own unpublished content',
                12 => 'user_default_permissions:view revisions',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'page_manager_handlers' => 
              array (
                0 => 'node_edit_panel_context',
              ),
              'page_manager_pages' => 
              array (
                0 => 'panopoly_admin_layout_library',
                1 => 'panopoly_admin_page_library',
                2 => 'panopoly_admin_pane_library',
              ),
              'variable' => 
              array (
                0 => 'user_admin_role',
              ),
            ),
            'version' => '7.x-1.29',
            'datestamp' => '1447887249',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.29',
        ),
        'panopoly_core' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/panopoly/panopoly_core/panopoly_core.module',
          'basename' => 'panopoly_core.module',
          'name' => 'panopoly_core',
          'info' => 
          array (
            'name' => 'Panopoly Core',
            'description' => 'The magical core of the Panopoly framework.',
            'core' => '7.x',
            'package' => 'Panopoly',
            'project' => 'panopoly_core',
            'dependencies' => 
            array (
              0 => 'taxonomy',
              1 => 'ctools',
              2 => 'date',
              3 => 'date_api',
              4 => 'date_popup',
              5 => 'date_views',
              6 => 'defaultconfig',
              7 => 'entity',
              8 => 'entityreference',
              9 => 'features',
              10 => 'field_group',
              11 => 'field_sql_storage',
              12 => 'fieldable_panels_panes',
              13 => 'image',
              14 => 'jquery_update',
              15 => 'libraries',
              16 => 'list',
              17 => 'menu',
              18 => 'page_manager',
              19 => 'panelizer',
              20 => 'panels',
              21 => 'panels_breadcrumbs',
              22 => 'panels_ipe',
              23 => 'pathauto',
              24 => 'pm_existing_pages',
              25 => 'strongarm',
              26 => 'token',
              27 => 'transliteration',
              28 => 'views',
              29 => 'views_autocomplete_filters',
              30 => 'views_content',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/panopoly-dropbutton.css',
              ),
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'panelizer:panelizer:1',
                1 => 'strongarm:strongarm:1',
                2 => 'views:views_default:3.0',
              ),
              'defaultconfig' => 
              array (
                0 => 'strongarm:apps_allow_voting',
                1 => 'strongarm:date_first_day',
                2 => 'strongarm:date_format_long',
                3 => 'strongarm:date_format_medium',
                4 => 'strongarm:date_format_panopoly_day',
                5 => 'strongarm:date_format_panopoly_time',
                6 => 'strongarm:date_format_short',
                7 => 'strongarm:field_bundle_settings_taxonomy_term__panopoly_categories',
                8 => 'strongarm:jquery_update_jquery_version',
                9 => 'strongarm:panelizer_defaults_taxonomy_term_panopoly_categories',
                10 => 'strongarm:panels_page_allowed_layouts',
                11 => 'strongarm:panels_page_allowed_types',
                12 => 'strongarm:panels_page_default',
                13 => 'strongarm:pathauto_taxonomy_term_panopoly_categories_pattern',
                14 => 'strongarm:pathauto_update_action',
                15 => 'user_default_permissions:administer panels styles',
                16 => 'user_default_permissions:change layouts in place editing',
                17 => 'user_default_permissions:use page manager',
                18 => 'user_default_permissions:use panels in place editing',
                19 => 'user_default_roles:administrator',
                20 => 'user_default_roles:editor',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_featured_image',
              ),
              'field_instance' => 
              array (
                0 => 'taxonomy_term-panopoly_categories-field_featured_image',
              ),
              'panelizer_defaults' => 
              array (
                0 => 'taxonomy_term:panopoly_categories:default',
                1 => 'taxonomy_term:panopoly_categories:default:default',
                2 => 'taxonomy_term:panopoly_categories:default:featured',
              ),
              'taxonomy' => 
              array (
                0 => 'panopoly_categories',
              ),
              'variable' => 
              array (
                0 => 'ctools_content_all_views',
                1 => 'page_manager_node_edit_disabled',
                2 => 'page_manager_node_view_disabled',
                3 => 'page_manager_term_view_disabled',
                4 => 'panelizer_taxonomy_term:panopoly_categories_allowed_layouts_default',
                5 => 'panelizer_taxonomy_term:panopoly_categories_allowed_types_default',
              ),
              'views_view' => 
              array (
                0 => 'panopoly_taxonomy',
              ),
            ),
            'version' => '7.x-1.29',
            'datestamp' => '1447887258',
            'php' => '5.2.4',
          ),
          'schema_version' => '7105',
          'version' => '7.x-1.29',
        ),
        'panopoly_users' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/panopoly/panopoly_users/panopoly_users.module',
          'basename' => 'panopoly_users.module',
          'name' => 'panopoly_users',
          'info' => 
          array (
            'name' => 'Panopoly Users',
            'description' => 'Maintains user accounts and user workflows.',
            'core' => '7.x',
            'package' => 'Panopoly',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'defaultconfig',
              2 => 'features',
              3 => 'field_group',
              4 => 'image',
              5 => 'page_manager',
              6 => 'panelizer',
              7 => 'pm_existing_pages',
              8 => 'strongarm',
              9 => 'user_picture_field',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'field_group:field_group:1',
                1 => 'page_manager:pages_default:1',
                2 => 'panelizer:panelizer:1',
                3 => 'pm_existing_pages:pm_existing_pages:1',
                4 => 'strongarm:strongarm:1',
              ),
              'defaultconfig' => 
              array (
                0 => 'strongarm:panelizer_defaults_user_user',
                1 => 'strongarm:user_picture_style',
                2 => 'strongarm:user_pictures',
                3 => 'user_default_permissions:administer panelizer user user breadcrumbs',
                4 => 'user_default_permissions:administer panelizer user user content',
                5 => 'user_default_permissions:administer panelizer user user context',
                6 => 'user_default_permissions:administer panelizer user user defaults',
                7 => 'user_default_permissions:administer panelizer user user layout',
                8 => 'user_default_permissions:administer panelizer user user overview',
                9 => 'user_default_permissions:administer panelizer user user settings',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'field_user_about',
                1 => 'field_user_picture',
              ),
              'field_group' => 
              array (
                0 => 'group_user_profile|user|user|form',
              ),
              'field_instance' => 
              array (
                0 => 'user-user-field_user_about',
                1 => 'user-user-field_user_picture',
              ),
              'page_manager_existing_pages' => 
              array (
                0 => 'user_login',
                1 => 'user_password',
                2 => 'user_register',
              ),
              'page_manager_handlers' => 
              array (
                0 => 'pm_existing_pages_user_login_panel_context',
                1 => 'pm_existing_pages_user_password_panel_context',
                2 => 'pm_existing_pages_user_register_panel_context',
                3 => 'user_edit_panel_context',
              ),
              'panelizer_defaults' => 
              array (
                0 => 'user:user:default',
                1 => 'user:user:default:default',
                2 => 'user:user:default:featured',
              ),
              'variable' => 
              array (
                0 => 'page_manager_user_view_disabled',
                1 => 'panelizer_user:user_allowed_layouts_default',
                2 => 'panelizer_user:user_allowed_types_default',
                3 => 'pm_existing_pages_disabled_user_login',
                4 => 'pm_existing_pages_disabled_user_password',
                5 => 'pm_existing_pages_disabled_user_register',
                6 => 'user_picture_field_source_bundle',
                7 => 'user_picture_field_source_entity',
                8 => 'user_picture_field_source_field',
              ),
            ),
            'version' => '7.x-1.29',
            'project' => 'panopoly_users',
            'datestamp' => '1447888508',
            'php' => '5.2.4',
          ),
          'schema_version' => '7001',
          'version' => '7.x-1.29',
        ),
        'panopoly_pages' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/panopoly/panopoly_pages/panopoly_pages.module',
          'basename' => 'panopoly_pages.module',
          'name' => 'panopoly_pages',
          'info' => 
          array (
            'name' => 'Panopoly Pages',
            'description' => 'Provides a basic page, suitable for Panelizing.',
            'core' => '7.x',
            'package' => 'Panopoly',
            'project' => 'panopoly_pages',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'defaultconfig',
              2 => 'features',
              3 => 'image',
              4 => 'list',
              5 => 'menu_block',
              6 => 'options',
              7 => 'page_manager',
              8 => 'panelizer',
              9 => 'panopoly_core',
              10 => 'strongarm',
              11 => 'taxonomy',
              12 => 'text',
            ),
            'features' => 
            array (
              'ctools' => 
              array (
                0 => 'page_manager:pages_default:1',
                1 => 'panelizer:panelizer:1',
                2 => 'strongarm:strongarm:1',
              ),
              'defaultconfig' => 
              array (
                0 => 'strongarm:pathauto_node_panopoly_landing_page_pattern',
                1 => 'user_default_permissions:create panopoly_landing_page content',
                2 => 'user_default_permissions:create panopoly_page content',
                3 => 'user_default_permissions:delete any panopoly_landing_page content',
                4 => 'user_default_permissions:delete any panopoly_page content',
                5 => 'user_default_permissions:delete own panopoly_landing_page content',
                6 => 'user_default_permissions:delete own panopoly_page content',
                7 => 'user_default_permissions:edit any panopoly_landing_page content',
                8 => 'user_default_permissions:edit any panopoly_page content',
                9 => 'user_default_permissions:edit own panopoly_landing_page content',
                10 => 'user_default_permissions:edit own panopoly_page content',
              ),
              'features_api' => 
              array (
                0 => 'api:2',
              ),
              'field_base' => 
              array (
                0 => 'body',
                1 => 'field_featured_categories',
                2 => 'field_featured_status',
              ),
              'field_instance' => 
              array (
                0 => 'node-panopoly_page-body',
                1 => 'node-panopoly_page-field_featured_categories',
                2 => 'node-panopoly_page-field_featured_image',
                3 => 'node-panopoly_page-field_featured_status',
              ),
              'node' => 
              array (
                0 => 'panopoly_landing_page',
                1 => 'panopoly_page',
              ),
              'page_manager_handlers' => 
              array (
                0 => 'node_edit_panel_context_landing_page',
              ),
              'panelizer_defaults' => 
              array (
                0 => 'node:panopoly_landing_page:default',
                1 => 'node:panopoly_page:default',
                2 => 'node:panopoly_page:default:default',
                3 => 'node:panopoly_page:default:featured',
                4 => 'node:panopoly_page:default:teaser',
              ),
              'variable' => 
              array (
                0 => 'date_popup_authored_enabled_panopoly_landing_page',
                1 => 'field_bundle_settings_node__panopoly_landing_page',
                2 => 'field_bundle_settings_node__panopoly_page',
                3 => 'menu_options_panopoly_landing_page',
                4 => 'menu_options_panopoly_page',
                5 => 'menu_parent_panopoly_landing_page',
                6 => 'menu_parent_panopoly_page',
                7 => 'node_options_panopoly_landing_page',
                8 => 'node_options_panopoly_page',
                9 => 'node_preview_panopoly_landing_page',
                10 => 'node_preview_panopoly_page',
                11 => 'node_submitted_panopoly_landing_page',
                12 => 'node_submitted_panopoly_page',
                13 => 'panelizer_defaults_node_panopoly_landing_page',
                14 => 'panelizer_defaults_node_panopoly_page',
                15 => 'panelizer_node:panopoly_landing_page_allowed_layouts_default',
                16 => 'panelizer_node:panopoly_landing_page_allowed_types_default',
                17 => 'panelizer_node:panopoly_page_allowed_layouts_default',
                18 => 'panelizer_node:panopoly_page_allowed_types_default',
                19 => 'save_continue_panopoly_page',
              ),
            ),
            'version' => '7.x-1.29',
            'datestamp' => '1447887603',
            'php' => '5.2.4',
          ),
          'schema_version' => '7102',
          'version' => '7.x-1.29',
        ),
        'panopoly_magic' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/modules/panopoly/panopoly_magic/panopoly_magic.module',
          'basename' => 'panopoly_magic.module',
          'name' => 'panopoly_magic',
          'info' => 
          array (
            'name' => 'Panopoly Magic',
            'description' => 'Weaves together the chaos magic.',
            'core' => '7.x',
            'package' => 'Panopoly',
            'project' => 'panopoly_magic',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'fape',
              2 => 'features',
              3 => 'page_manager',
              4 => 'panels_ipe',
              5 => 'views',
            ),
            'scripts' => 
            array (
              0 => 'panopoly-magic.js',
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/panopoly-magic.css',
                1 => 'css/panopoly-modal.css',
              ),
            ),
            'features' => 
            array (
              'features_api' => 
              array (
                0 => 'api:2',
              ),
            ),
            'files' => 
            array (
              0 => 'plugins/views/panopoly_magic_plugin_display_panel_pane.inc',
            ),
            'version' => '7.x-1.29',
            'datestamp' => '1447887596',
            'php' => '5.2.4',
          ),
          'schema_version' => '7103',
          'version' => '7.x-1.29',
        ),
      ),
      'themes' => 
      array (
        'default' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/themes/radix/kits/default/default.info',
          'basename' => 'default.info',
          'name' => '{{Name}}',
          'info' => 
          array (
            'name' => '{{Name}}',
            'description' => '{{Description}}',
            'screenshot' => 'screenshot.png',
            'core' => '7.x',
            'base theme' => 'radix',
            'hidden' => 'true',
            'regions' => 
            array (
              'content' => 'Content',
            ),
            'plugins' => 
            array (
              'panels' => 
              array (
                'layouts' => 'panels/layouts',
                'styles' => 'panels/styles',
              ),
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'assets/stylesheets/screen.css',
              ),
              'print' => 
              array (
                0 => 'assets/stylesheets/print.css',
              ),
            ),
            'stylesheets-conditional' => 
            array (
              'lte IE 9' => 
              array (
                'all' => 
                array (
                  0 => 'assets/stylesheets/ie.css',
                ),
              ),
              'IE 8' => 
              array (
                'all' => 
                array (
                  0 => 'assets/stylesheets/ie8.css',
                ),
              ),
            ),
            'scripts' => 
            array (
              0 => 'assets/javascripts/script.js',
            ),
            'version' => '7.x-3.0-rc4+17-dev',
            'project' => 'radix',
            'datestamp' => '1447964436',
          ),
          'version' => '7.x-3.0-rc4+17-dev',
        ),
        'oa_radix' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/themes/oa_radix/oa_radix.info',
          'basename' => 'oa_radix.info',
          'name' => 'Open Atrium Radix',
          'info' => 
          array (
            'name' => 'Open Atrium Radix',
            'description' => 'An Open Atrium theme based on Radix',
            'screenshot' => 'screenshot.png',
            'core' => '7.x',
            'base theme' => 'radix',
            'regions' => 
            array (
              'help' => 'Help',
              'navigation' => 'Navigation',
              'menu' => 'Menu',
              'content' => 'Content',
              'footer' => 'Footer',
              'primarytabs' => 'Primary tabs',
            ),
            'plugins' => 
            array (
              'panels' => 
              array (
                'layouts' => 'panels/layouts',
                'styles' => 'panels/styles',
              ),
            ),
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'assets/stylesheets/screen.css',
                1 => 'assets/stylesheets/font-awesome.min.css',
              ),
              'print' => 
              array (
                0 => 'assets/stylesheets/print.css',
              ),
            ),
            'stylesheets-conditional' => 
            array (
              'IE 7' => 
              array (
                'all' => 
                array (
                  0 => 'assets/stylesheets/ie7.css',
                ),
              ),
              'IE 8' => 
              array (
                'all' => 
                array (
                  0 => 'assets/stylesheets/ie8.css',
                ),
              ),
            ),
            'scripts' => 
            array (
              0 => 'assets/javascripts/script.js',
            ),
            'version' => '7.x-3.23',
            'project' => 'oa_radix',
            'datestamp' => '1447951174',
          ),
          'version' => '7.x-3.23',
        ),
        'responsive_bartik' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/themes/responsive_bartik/responsive_bartik.info',
          'basename' => 'responsive_bartik.info',
          'name' => 'Responsive Bartik',
          'info' => 
          array (
            'name' => 'Responsive Bartik',
            'description' => 'A flexible, recolorable theme with many regions and a responsive, mobile-first layout.',
            'version' => '7.x-1.0',
            'core' => '7.x',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'css/layout.css',
                1 => 'css/style.css',
                2 => 'css/colors.css',
              ),
              'print' => 
              array (
                0 => 'css/print.css',
              ),
            ),
            'scripts' => 
            array (
              0 => 'js/collapsible-menu.js',
            ),
            'regions' => 
            array (
              'header' => 'Header',
              'help' => 'Help',
              'page_top' => 'Page top',
              'page_bottom' => 'Page bottom',
              'highlighted' => 'Highlighted',
              'featured' => 'Featured',
              'content' => 'Content',
              'sidebar_first' => 'Sidebar first',
              'sidebar_second' => 'Sidebar second',
              'triptych_first' => 'Triptych first',
              'triptych_middle' => 'Triptych middle',
              'triptych_last' => 'Triptych last',
              'footer_firstcolumn' => 'Footer first column',
              'footer_secondcolumn' => 'Footer second column',
              'footer_thirdcolumn' => 'Footer third column',
              'footer_fourthcolumn' => 'Footer fourth column',
              'footer' => 'Footer',
            ),
            'settings' => 
            array (
              'shortcut_module_link' => '0',
            ),
            'project' => 'responsive_bartik',
            'datestamp' => '1413392482',
          ),
          'version' => '7.x-1.0',
        ),
        'radix' => 
        array (
          'filename' => '/var/aegir/platforms/openatrium2/profiles/openatrium/themes/radix/radix.info',
          'basename' => 'radix.info',
          'name' => 'Radix',
          'info' => 
          array (
            'name' => 'Radix',
            'description' => 'A Drupal theme with Bootstrap and Sass.',
            'screenshot' => 'screenshot.png',
            'core' => '7.x',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'assets/stylesheets/radix-style.css',
              ),
              'print' => 
              array (
                0 => 'assets/stylesheets/radix-print.css',
              ),
            ),
            'stylesheets-conditional' => 
            array (
              'lte IE 9' => 
              array (
                'all' => 
                array (
                  0 => 'assets/stylesheets/ie.css',
                ),
              ),
            ),
            'scripts' => 
            array (
              0 => 'assets/javascripts/radix-script.js',
            ),
            'regions' => 
            array (
              'sidebar_first' => 'Sidebar',
              'content' => 'Content',
            ),
            'regions_hidden' => 
            array (
              0 => 'sidebar_first',
            ),
            'features' => 
            array (
              0 => 'logo',
              1 => 'name',
              2 => 'favicon',
            ),
            'version' => '7.x-3.0-rc4+17-dev',
            'project' => 'radix',
            'datestamp' => '1447964436',
          ),
          'version' => '7.x-3.0-rc4+17-dev',
        ),
      ),
    ),
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);