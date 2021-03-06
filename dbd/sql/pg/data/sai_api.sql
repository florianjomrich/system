DELETE FROM system.api WHERE "group" = 42;

INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (0, 42, 0, -1, NULL, 'sai_mod', NULL);
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (1, 42, 1, 0, NULL, 'js', NULL);
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (2, 42, 1, 0, NULL, 'css', NULL);
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (3, 42, 0, 0, NULL, 'action', NULL);

INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (10, 42, 2, 3, 'login', 'username', 'ALL');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (11, 42, 2, 3, 'login', 'password_sha', 'ALL');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (12, 42, 2, 3, 'login', 'password_md5', 'ALL');

INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (20, 42, 2, 3, 'register', 'username', 'ALL');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (21, 42, 2, 3, 'register', 'password_sha', 'ALL');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (22, 42, 2, 3, 'register', 'password_md5', 'ALL');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (23, 42, 2, 3, 'register', 'email', 'ALL');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (24, 42, 2, 4, 'register', 'locale', 'ALL');

INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (30, 42, 2, 3, 'edit', 'id', 'ALL');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (31, 42, 2, 3, 'edit', 'lang', 'LANG');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (32, 42, 2, 3, 'edit', 'newtext', 'ALL');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (33, 42, 2, 3, 'delete', 'id', 'ALL');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (34, 42, 2, 3, 'editmode', 'entry', 'ALL');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (35, 42, 2, 3, 'add', 'id', 'ALL');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (36, 42, 2, 3, 'add', 'category', 'INT');

INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (40, 42, 2, 3, 'upload', 'cat', 'STRING');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (41, 42, 2, 3, 'del', 'cat', 'STRING');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (42, 42, 2, 3, 'del', 'id', 'STRING');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (43, 42, 2, 3, 'rn', 'cat', 'STRING');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (44, 42, 2, 3, 'rn', 'id', 'STRING');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (45, 42, 2, 3, 'rn', 'newid', 'STRING');

INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (50, 42, 3, 3, 'filter', 'filter', 'STRING');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (51, 42, 3, 3, 'error', 'error', 'INT');
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (52, 42, 0, 3, 'stats', 'name', null);
INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (53, 42, 3, 52, null, 'filter', 'UINT');

INSERT INTO system.api ("ID", "group", type, "parentID", "parentValue", name, verify) VALUES (300, 42, 4, -1, NULL, '_lang', 'LANG');