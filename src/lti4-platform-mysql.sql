CREATE TABLE lti2_tool (
  tool_pk int(11) NOT NULL AUTO_INCREMENT,
  name varchar(50) NOT NULL,
  consumer_key varchar(255) DEFAULT NULL,
  secret varchar(1024) DEFAULT NULL,
  message_url varchar(255) DEFAULT NULL,
  initiate_login_url varchar(255) DEFAULT NULL,
  redirection_uris text DEFAULT NULL,
  public_key text DEFAULT NULL,
  lti_version varchar(10) DEFAULT NULL,
  signature_method varchar(15) DEFAULT NULL,
  settings text DEFAULT NULL,
  enabled tinyint(1) NOT NULL,
  enable_from datetime DEFAULT NULL,
  enable_until datetime DEFAULT NULL,
  last_access date DEFAULT NULL,
  created datetime NOT NULL,
  updated datetime NOT NULL,
  PRIMARY KEY (tool_pk)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE lti2_tool
  ADD UNIQUE INDEX lti2_tool_initiate_login_url_UNIQUE (initiate_login_url ASC);

CREATE TABLE item (
  item_pk int(11) NOT NULL AUTO_INCREMENT,
  resource_link_pk int(11) NOT NULL,
  item_title varchar(200) NOT NULL,
  item_text text,
  item_url varchar(200) DEFAULT NULL,
  max_rating int(2) NOT NULL DEFAULT '5',
  step int(1) NOT NULL DEFAULT '1',
  visible tinyint(1) NOT NULL DEFAULT '0',
  sequence int(3) NOT NULL DEFAULT '0',
  created datetime NOT NULL,
  updated datetime NOT NULL,
  PRIMARY KEY (item_pk)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE rating (
  item_pk int(11) NOT NULL,
  user_pk int(11) NOT NULL,
  rating decimal(10,2) NOT NULL,
  PRIMARY KEY (item_pk, user_pk)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE item
  ADD CONSTRAINT item_lti_resource_link_FK1 FOREIGN KEY (resource_link_pk)
  REFERENCES lti_resource_link (resource_link_pk)
  ON UPDATE CASCADE;

ALTER TABLE rating
  ADD CONSTRAINT rating_item_FK1 FOREIGN KEY (item_pk)
  REFERENCES item (item_pk);
