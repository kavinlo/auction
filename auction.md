# Acution模块划分

## 用户模块

+ auc_users -- 用户表
  1. uName
  2. uPassword
  3. created_at（注册时间）

## 管理员模块

+ auc_manage -- 管理员表
  1. mName（管理员昵称）
  2. mPassword（管理员密码）
  3. phoneTel（管理员电话）
  4. mEmail（管理员邮箱）

## 拍品模块



+ auc_lots -- 拍品表
  1. lotPrice（底价）
  2. rang（最低加价幅度）
  3. time（竞拍时间  2018.11.12 15:30）
  4. timeLength（竞拍时长 1天、2小时、5分钟...）
  5. lDescription（拍品描述）
  6. created_at（拍品添加时间）
+ auc_imgs -- 拍品图片表
  1. lot_id（拍品id）
  2. lotImgUrl（拍品图片地址）
+ auc_attris -- 拍品属性
  1. attriName（拍品属性名）
  2. attriVal（拍品属性值）
  3. lot_id（拍品ID）

## 收藏模块

+ auc_collects -- 收藏表
  1. user_id（用户id）
  2. lot_id（拍品id）
  3. created_at（收藏时间）

## 订单模块

+ auc_orders -- 订单表
  1. order_num（订单号）
  2. lot_id（拍品id）
  3. user_id（用户id）
  4. price（下的价格）
  5. created_at（订单完成时间）
  6. state（订单状态 0-已付押金 1-已拍下付款 2-待收货 3-待评价）

## 评论模块

+ auc_lotComments -- 拍品聊天记录表
  1. lot_id（拍品ID）
  2. user_id（用户id）
  3. content（聊天内容）
  4. created_at（时间）
+ auc_orderComments -- 订单评论表
  1. order_id（订单id）
  2. user_id（用户id）
  3. content（评论内容）
  4. star（星级）
  5. created_at（评论时间）

## 搜索模块

## 推荐模块

## 收货地址模块

+ auc_address -- 地址表
  1. user_id（用户id）
  2. address（地址）
  3. phone（电话）

## 日志模块

+ auc_logs -- 日志表
  1. id（用户/管理员id）
  2. info（信息）
  3. created_at（记录时间）

## 权限管理







