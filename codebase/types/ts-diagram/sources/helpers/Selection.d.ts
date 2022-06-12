import { IEventSystem } from "../../../ts-common/events";
import { Id } from "../../../ts-common/types";
import { DataCollection } from "../../../ts-data";
import { SelectionEvents } from "../types";
interface ISelectionEventsHandlersMap {
    [key: string]: (...args: any[]) => any;
    [SelectionEvents.afterSelect]: (id: Id, subId?: Id | undefined) => void;
    [SelectionEvents.afterUnSelect]: (id: Id, subId?: Id | undefined) => void;
    [SelectionEvents.beforeSelect]: (id: Id, subId?: Id | undefined) => void | boolean;
    [SelectionEvents.beforeUnSelect]: (id: Id, subId?: Id | undefined) => void | boolean;
}
export declare class Selection {
    events: IEventSystem<SelectionEvents, ISelectionEventsHandlersMap>;
    private _data;
    private _selected;
    private _subSelected;
    constructor(_config: any, data?: DataCollection, events?: IEventSystem<any>);
    getId(): Id;
    getSubId(): Id;
    getItem(): any;
    remove(id?: Id, subId?: Id): boolean;
    add(id: Id, subId?: Id): void;
}
export {};
