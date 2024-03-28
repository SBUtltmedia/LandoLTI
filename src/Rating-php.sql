DROP TABLE IF EXISTS item;
CREATE TABLE item (
  item_pk int(11) PRIMARY KEY NOT NULL ,
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
  CONSTRAINT item_lti_resource_link_FK1 FOREIGN KEY (resource_link_pk) REFERENCES lti_resource_link (resource_link_pk) ON UPDATE CASCADE
);
DROP TABLE IF EXISTS rating;
CREATE TABLE rating (
  item_pk int(11) NOT NULL,
  user_pk int(11) NOT NULL,
  rating decimal(10,2) NOT NULL,
  PRIMARY KEY (item_pk, user_pk),
  CONSTRAINT rating_item_FK1 FOREIGN KEY (item_pk) REFERENCES item (item_pk)
);

